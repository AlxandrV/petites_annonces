<?php
namespace App;


use App\Connexion;
use Respect\Validation\Validator as v;

class Post{
    public $data=[];
    public static function Add(){

        $validation= (new self)->Validation();

        if($validation ==="OK"){
            //upload picture
            if($_FILES['file']['name']!==''){
                $info = new \SplFileInfo($_FILES['file']['name']);
                $extension = $info->getExtension();
                $code=bin2hex(openssl_random_pseudo_bytes(16));
                $upload = (new self)->UploadPic($code,$extension);
                if($upload == !false){
                    $picture = basename($code.'.'.$extension);
                }else{
                    echo json_encode("Echec lors de l'envoi du fichier");
                    return;
                }
            }else{
                $picture = 'placeholder.jpg';
            }

            //get values
            $title = $_POST['title'];
            $descript = $_POST['description'];
            $user_mail  = $_POST['user_mail'];
            $user_n  = $_POST['user_name'];
            $user_firstname  = $_POST['user_firstname'];
            $user_phone  = $_POST['user_phone'];
            $category  = $_POST['category'];

            //Connexion
            $base = new Connexion();
            
            //get category_id
            $req = $base->q("SELECT `id` FROM `category` WHERE `name` = :category",
            array(array('category',$category,\PDO::PARAM_STR)));
            $category_id = $req[0]->id;

            //set unique id
            $unique_id=bin2hex(openssl_random_pseudo_bytes(18));

            //set date_creation
            $date_creation=date("Y-m-d");

            //ADD POST
            $base->qw('INSERT INTO post(`unique_id`, `title`, `description`, `picture`, `date_creation`, `category_id`, `user_mail`, `user_name`, `user_firstname`, `user_phone`)
                      VALUES (:unique_id, :title, :descript, :picture, :date_creation, :category_id, :user_mail, :user_n, :user_firstname, :user_phone)',
            array(
                array('unique_id',$unique_id,\PDO::PARAM_STR),
                array('title',$title,\PDO::PARAM_STR),
                array('descript',$descript,\PDO::PARAM_STR),
                array('picture',$picture,\PDO::PARAM_STR),
                array('date_creation',$date_creation,\PDO::PARAM_STR),
                array('category_id',$category_id,\PDO::PARAM_INT),
                array('user_mail',$user_mail,\PDO::PARAM_STR),
                array('user_n',$user_n,\PDO::PARAM_STR),
                array('user_firstname',$user_firstname,\PDO::PARAM_STR),
                array('user_phone',$user_phone,\PDO::PARAM_STR)
                )
            );
        }
        $sendMail = new SMail('valid',$user_mail,$user_firstname,$user_n,$unique_id);
        echo json_encode($validation.' '.$sendMail);
    }


    public static function Update(){

        $validation= (new self)->Validation();


        if($validation ==="OK"){

            //set picture
            if(isset($_POST['picture']) && !empty($_POST['picture'])){
                $picture = $_POST['picture'];
            }else{
                $picture = "placeholder.jpg";
            }
            if(isset($_POST['unique_id']) && !empty($_POST['unique_id'])){
                $unique_id = $_POST['unique_id'];
            }else{
                echo json_encode("Cette annonce n'existe pas");
                return;
            }
            // get values
            $title = $_POST['title'];
            $descript = $_POST['description'];
            $category  = $_POST['category'];


            //Connexion
            $base = new Connexion();

            //get category_id
            $req = $base->q("SELECT `id` FROM `category` WHERE `name` = :category",
            array(array('category',$category,\PDO::PARAM_STR)));
            $category_id = $req[0]->id;

            //set date_validation
            $date_validation=date("Y-m-d");
            $is_validated = 1;

            //UPDATE POST
            $base->qw('UPDATE post SET `title` = :title, `description` = :descript, `category_id` = :category_id, `is_validated` = :is_validated, `date_validation` = :date_validation, `picture` = :picture
                      WHERE `unique_id` = :unique_id',
            array(
                array('unique_id',$unique_id,\PDO::PARAM_STR),
                array('title',$title,\PDO::PARAM_STR),
                array('descript',$descript,\PDO::PARAM_STR),
                array('category_id',$category_id,\PDO::PARAM_INT),
                array('is_validated',$is_validated,\PDO::PARAM_INT),
                array('date_validation',$date_validation,\PDO::PARAM_STR),
                array('picture',$picture,\PDO::PARAM_STR)
                )
            );
        }
        echo json_encode($validation);
    }

    public static function Delete(){

        if(isset($_POST['unique_id']) && !empty($_POST['unique_id'])){
            $unique_id = $_POST['unique_id'];
        }else{
            echo json_encode("Cette annonce n'existe pas");
            return;
        }

        //Connexion
        $base = new Connexion();

        //DELETE POST
        $base->qw('DELETE FROM post WHERE unique_id = :unique_id',
            array(array('unique_id',$unique_id,\PDO::PARAM_STR)));

        $req = $base->q(
                        "SELECT `user_mail`,
                                `user_name`,
                                `user_firstname`,
                        FROM post
                        WHERE `unique_id` = :unique_id",
            array(array('unique_id',$unique_id,\PDO::PARAM_STR)));
        $user_mail = $req[0]->user_mail;
        $user_firstname = $req[0]->user_firstname;
        $user_n = $req[0]->user_name;

        $sendMail = new SMail('delete',$user_mail,$user_firstname,$user_n,$unique_id);
        echo json_encode('OK '.$sendMail);
    }

    public static function ShowPost(){

        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = $_POST['id'];
        }else{
            echo json_encode("Erreur");
            return;
        }

        //Connexion
        $base = new Connexion();

        //SHOW POST
        $req = $base->q(
                        "SELECT
                            p.title,
                            p.description,
                            p.picture,
                            p.date_validation,
                            p.user_mail,
                            p.user_name,
                            p.user_firstname,
                            p.user_phone,
                            p.category_id,
                            cat.name as category_name
                        FROM post as p
                        INNER JOIN category cat ON p.category_id = cat.ID
                        WHERE p.id LIKE :id",
            array(array('id',$id,\PDO::PARAM_STR)));

        // echo json_encode($req);

        dump($req);
        $twig = new Twig('modal_detail_post.html.twig');
        $twig->render([
            'posts' => $req[0],
        ]);

    }

    public function Validation(){
        if(isset($_POST['title']) && !empty($_POST['title'])){
            if(v::stringVal()->validate($_POST['title']) == false){
                return 'Titre invalide';
            }
        }else{
            return 'Veuillez entrer un titre';
        }

        if(isset($_POST['description']) && !empty($_POST['description'])){
            if(v::stringVal()->validate($_POST['description']) == false){
                return 'Déscription invalide';
            }
        }else{
            return 'Veuillez entrer une description';
        }

        if(isset($_POST['user_mail']) && !empty($_POST['user_mail'])){
            if(v::email()->validate($_POST['user_mail']) == false){
                return 'Adresse mail invalide';
            }
        }else{
            return 'Veuillez entrer une adresse mail';
        }

        if(isset($_POST['user_name']) && !empty($_POST['user_name'])){
            if(v::stringVal()->validate($_POST['user_name']) == false){
                return 'Nom invalide';
            }
        }else{
            return 'Veuillez entrer votre nom';
        }

        if(isset($_POST['user_firstname']) && !empty($_POST['user_firstname'])){
            if(v::stringVal()->validate($_POST['user_firstname']) == false){
                return 'Prénom invalide';
            }
        }else{
            return 'Veuillez entrer votre prénom';
        }

        if(isset($_POST['user_phone']) && !empty($_POST['user_phone'])){
            if(v::stringVal()->validate($_POST['user_phone']) == false){
                return 'Téléphone invalide';
            }
        }else{
            return 'Veuillez entrer votre numero de téléphone';
        }

        if(isset($_POST['category']) && !empty($_POST['category'])){
            if(v::stringVal()->validate($_POST['category']) == false){
                return 'Catégorie invalide';
            }
        }else{
            return 'Veuillez choisir une categorie';
        }
        return "OK";
    }

    public function UploadPic($code,$extension){
        $files_tmp = $_FILES['file']['tmp_name'];
        $url = './media/user_uploads';
        $newName = basename($code.'.'.$extension);
        $path = "$url" . '/' . "$newName";
        move_uploaded_file($files_tmp, $path);
        if (file_exists($path)) {
            return true;
        }
        return false;
    }
}
