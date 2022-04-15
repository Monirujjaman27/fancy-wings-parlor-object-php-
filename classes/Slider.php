<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class Slider
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function add($req, $file)
    {
        $name = $this->fm->validation($req['name']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $heading = $this->fm->validation($req['heading']);
        $heading = mysqli_real_escape_string($this->db->link, $heading);
        $subheading = $this->fm->validation($req['subheading']);
        $subheading = mysqli_real_escape_string($this->db->link, $subheading);

        $permited  = array('jpg', 'jepg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div          = explode('.', $file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
        $upload_image = "upload/" . $unique_image;
        if ($name == '' || $file == '') {
            $msg = 'Fild Must Not Be empty';
            return $msg;
        } elseif ($file_size > 1048567) {
            $msg = "Image size Should be less then 1MB";
            return $msg;
        } elseif ($file !== '' && in_array($file_ext, $permited) === FALSE) {
            $msg = "You can upload only: " . implode(', ', $permited);
            return $msg;
        } else {
            move_uploaded_file($file_temp, $upload_image);
            $query = "INSERT INTO sliders(name, heading, subheading, image) VALUES ('$name','$heading','$subheading','$upload_image')";
            $result = $this->db->insert($query);
            if ($result) {
                session::set('success', 'Slider Create Successfully');
                $name = '';
                $file = '';
                header("Location:sliders.php");
            } else {
                session::set('warning', 'There Was Something Wrong to Insert the Service');
            }
        }
    }
    public function show()
    {
        $query = "SELECT * FROM sliders order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function update($req, $file, $id)
    {
        $name = $this->fm->validation($req['name']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $heading = $this->fm->validation($req['heading']);
        $heading = mysqli_real_escape_string($this->db->link, $heading);
        $subheading = $this->fm->validation($req['subheading']);
        $subheading = mysqli_real_escape_string($this->db->link, $subheading);
        $oldImage = $this->fm->validation($req['oldImage']);
        $oldImage = mysqli_real_escape_string($this->db->link, $oldImage);

        $permited  = array('jpg', 'jepg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];
        $div          = explode('.', $file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
        $upload_image = "upload/" . $unique_image;
        if (empty($file_name)) {
            if ($name == '') {
                $msg = 'Fild Must Not Be empty';
                return $msg;
            } else {
                $query = "UPDATE sliders SET name = '$name', heading = '$heading', subheading = '$subheading' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    header("Location:sliders.php");
                    session::set('success', 'Update Successfully');
                } else {
                    session::set('warning', 'There Was Something Wrong to update');
                }
            }
        } else {
            if ($file_size > 1048567) {
                $msg = "Image size Should be less then 1MB";
                return $msg;
            } elseif (in_array($file_ext, $permited) === FALSE) {
                $msg = "You can upload only: " . implode(', ', $permited);
                return $msg;
            } else {
                move_uploaded_file($file_temp, $upload_image);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
                $query = "UPDATE sliders SET name = '$name', heading = '$heading', subheading = '$subheading', image = '$upload_image' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    header("Location:sliders.php");
                    session::set('success', 'Slider Update Successfully');
                } else {
                    $msg = 'There Was Something Wrong to Update';
                    session::set('warning', $msg);
                }
            }
        }
    }

    public function showById($gatId)
    {
        $query = "SELECT * FROM sliders WHERE id = '$gatId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function del($gatId)

    {
        $database = mysqli_connect('localhost', 'root', '', 'p1');
        $quary = "SELECT * FROM sliders where id = '$gatId'";
        $quaryData = mysqli_query($database, $quary);
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
                $queryImage = $item['image'];
                $delquery = "DELETE FROM sliders WHERE id = '$gatId'";
                $deldata = $this->db->delete($delquery);
                if ($deldata) {
                    if (file_exists($queryImage)) {
                        unlink($queryImage);
                    }
                    header("Location:sliders.php");
                    session::set('success', 'Slider Delete Successfully');
                } else {
                    $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete</p>';
                    return $msg;
                }
            }
        }
    }
}
?>