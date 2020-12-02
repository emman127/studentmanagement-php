<?php 

    class MyStudent {
        private $server = "mysql:host=localhost;dbname=student_record";
        private $user = "root";
        private $password = "";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $connections;

        public function get_connection() {
            try{
                $this->connections = new PDO($this->server, $this->user, $this->password, $this->options);
                return $this->connections;
            }catch(PDOException $e){
                echo "Unable to connect" . $e->getMessage();
            }
        }

        public function if_exists($firstname) {
            $connections = $this->get_connection();
            $stmt = $connections->prepare("SELECT * FROM student_tb WHERE firstname = ?");
            $stmt->execute([$firstname]);
            $studentCount = $stmt->rowCount();
            
            return $studentCount;
        }

        // student
        public function addStudent(){
            if(isset($_POST['submit'])) {
                $fname = htmlspecialchars($_POST['firstname']);
                $mname = htmlspecialchars($_POST['middlename']);
                $lname = htmlspecialchars($_POST['lastname']);
                $age = htmlspecialchars($_POST['age']);
                $gender = htmlspecialchars($_POST['gender']);
                $course = htmlspecialchars($_POST['course']);
                $subject = htmlspecialchars($_POST['subject']);

                if($this->if_exists($fname) == 0) {
                    $connections = $this->get_connection();
                    $stmt = $connections->prepare("INSERT INTO student_tb 
                        (`firstname`,`middlename`,`lastname`,`age`,`gender`,`course`,`subject`) VALUES (?,?,?,?,?,?,?)");
                    $stmt->execute([$fname, $mname, $lname, $age, $gender, $course, $subject]);
                    echo "Student added";
                }
                else {
                    echo " Student already exists!";
                }
            }
        }

        public function getStudents(){
            $connections = $this->get_connection();
            $stmt = $connections->prepare("SELECT * FROM student_tb");
            $stmt->execute();
            $students = $stmt->fetchall();
            $studentCount = $stmt->rowCount();

            if($studentCount > 0){
                return $students;
            }
            else {
                return 0;
            }
        }

        public function deleteStudent() {
            if(isset($_GET['id'])) {
                $id = htmlspecialchars($_GET['id']);

                $connections = $this->get_connection();
                $stmt = $connections->prepare("DELETE FROM student_tb WHERE id = ?");
                $success = $stmt->execute([$id]);
                if($success) {
                    header('Location: viewStudent.php');
                }
            }
        }

        // course
        public function addCourse() {
            if(isset($_POST['submit'])) {
                $code = htmlspecialchars($_POST['code']);
                $description = htmlspecialchars($_POST['description']);

                $connections = $this->get_connection();
                $stmt = $connections->prepare("INSERT INTO course_tb 
                    (`course_code`, `course_description`) VALUES (?,?)");
                $stmt->execute([$code, $description]);
            }
        }

        public function getCourse(){
            $connections = $this->get_connection();
            $stmt = $connections->prepare("SELECT * FROM course_tb");
            $stmt->execute();
            $course = $stmt->fetchall();
            $courseCount = $stmt->rowCount();

            if($courseCount > 0){
                return $course;
            }
            else {
                return 0;
            }
        }

        public function editCourse() {
            if(isset($_GET['id'])) {
                $id = htmlspecialchars($_GET['id']);

                $connections = $this->get_connection();
                $stmt = $connections->prepare("SELECT * FROM course_tb WHERE id = ?");
                $stmt->execute([$id]);
                $courseCount = $stmt->rowCount();
                if($courseCount > 0) {
                    $course = $stmt->fetchall();
                    $code = $course['course_code'];
                    $description = $course['course_description'];
                }
            }
        }

    }

    $mystudent = new MyStudent();

?>