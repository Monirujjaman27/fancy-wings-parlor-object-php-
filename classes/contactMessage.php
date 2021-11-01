<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>


<?php
class ContactMessage
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function showMessage()
    {
        $query = "SELECT * FROM contactmessage order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function delMessage($gatCatId)
    {
        $delquery = "DELETE FROM contactmessage WHERE id = '$gatCatId'";
        $delcat = $this->db->delete($delquery);
        if ($delcat) {
            $msg = "<p class='mb-0 alert alert-success'>Delete Success</p>";
            return $msg;
        } else {
            $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete the Message</p>';
            return $msg;
        }
    }
    public function showvalcalt($gatCatId)
    {
        $query = "SELECT * FROM contactmessage WHERE id = '$gatCatId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function contact($req)
    {
        $name   = $this->fm->validation($req['name']);
        $email  = $this->fm->validation($req['email']);
        $message = $this->fm->validation($req['message']);

        $name   = mysqli_real_escape_string($this->db->link, $name);
        $email   = mysqli_real_escape_string($this->db->link, $email);
        $message = mysqli_real_escape_string($this->db->link, $message);

        if ($name == '' || $email == '' || $message == '') {
            $msg = 'All Fileds is required';
            return $msg;
        } else {
            $query = "INSERT INTO contactmessage(name, email, messagebody) VALUES ('$name','$email','$message')";
            $result = $this->db->insert($query);
            if ($result) {
                $msg = "<p class='mb-0 alert alert-success'>Send Successfully</p>";
                return $msg;
                $name = '';
                $email = '';
                $message = '';
            } else {
                $msg = '<p class="mb-0 text-warning">There Was Something Wrong</p>';
                return $msg;
            }
        }
    }

    public function appointment($req)
    {
        $name   = $this->fm->validation($req['name']);
        $email  = $this->fm->validation($req['email']);
        $phone = $this->fm->validation($req['phone']);
        $appoint_for = $this->fm->validation($req['appoint_for']);
        $message = $this->fm->validation($req['message']);

        $name   = mysqli_real_escape_string($this->db->link, $name);
        $email   = mysqli_real_escape_string($this->db->link, $email);
        $message = mysqli_real_escape_string($this->db->link, $message);

        if ($name == '' || $email == '' || $message == '' || $phone == '' || $appoint_for == '') {
            $msg = 'All Fileds is required';
            return $msg;
        } else {
            $query = "INSERT INTO appointment(name, email, phone, appoint_for, messagebody) VALUES ('$name','$email','$phone','$appoint_for','$message')";
            $result = $this->db->insert($query);
            if ($result) {
                $msg = "<p class='mb-0 alert alert-success'>Send Successfully</p>";
                return $msg;
                $name = '';
                $email = '';
                $message = '';
                $phone = '';
                $appoint_for = '';
            } else {
                $msg = '<p class="mb-0 text-warning">There Was Something Wrong</p>';
                return $msg;
            }
        }
    }
}
?>