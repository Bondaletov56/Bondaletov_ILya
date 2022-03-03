<?
Class user
{
    public $l;
    public $p;

    public function __construct ($l, $p){
        $this->l = $l;
        $this->p = $p;
    }
    public function auth(){
        include_once "bd.php";
        $db_con=mysqli_connect($hostname, $user, $password, $dbname);
        $query = mysqli_query($db_con , "SELECT Login, Password from user WHERE Login='$this->l'");
        $arl = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $user1 = $arl[0];
        if ($this->l !== Null)
        {
        if ($arl == NULL){
        echo "Не верный логин";
        }
        else
            {if (count($this->l)>0) {
                 if (($user1['Login'] == $this->l) && $user1['Password'] == md5($this->p)) {
                    //require('hello_auth.php');
                    include 'hello_auth.php';
                    $_SESSION['login'] = $this->l;
                } else
                echo "Неверный пароль";
                }
    }
        }
    }
}
?>