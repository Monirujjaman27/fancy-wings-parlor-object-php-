<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class Galleries
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
        $description = $this->fm->validation($req['description']);
        $description = mysqli_real_escape_string($this->db->link, $description);

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
            $query = "INSERT INTO gallery(name, description, image) VALUES ('$name','$description','$upload_image')";
            $result = $this->db->insert($query);
            if ($result) {
                session::set('success', 'Gallery Create Successfully');
                $name = '';
                $file = '';
                header("Location:gallery.php");
            } else {
                session::set('warning', 'There Was Something Wrong to Insert the Service');
            }
        }
    }
    public function show()
    {
        $query = "SELECT * FROM gallery order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function update($req, $file, $id)
    {
        $name = $this->fm->validation($req['name']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $description = $this->fm->validation($req['description']);
        $description = mysqli_real_escape_string($this->db->link, $description);
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
                $query = "UPDATE gallery SET name = '$name', description = '$description' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    header("Location:gallery.php");
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
                $query = "UPDATE gallery SET name = '$name', description = '$description', image = '$upload_image' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    header("Location:gallery.php");
                    session::set('success', 'Gallery Update Successfully');
                } else {
                    session::set('warning', 'There Was Something Wrong to Update');
                }
            }
        }
    }

    public function showById($gatId)
    {
        $query = "SELECT * FROM gallery WHERE id = '$gatId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function del($gatId)

    {
        $database = mysqli_connect('localhost', 'root', '', 'p1');
        $quary = "SELECT * FROM gallery where id = '$gatId'";
        $quaryData = mysqli_query($database, $quary);
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
                $queryImage = $item['image'];
                $delquery = "DELETE FROM gallery WHERE id = '$gatId'";
                $deldata = $this->db->delete($delquery);
                if ($deldata) {
                    if (file_exists($queryImage)) {
                        unlink($queryImage);
                    }
                    header("Location:gallery.php");
                    session::set('success', 'Gallery Delete Successfully');
                } else {
                    $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete</p>';
                    return $msg;
                }
            }
        }
    }
}
?>