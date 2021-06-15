<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $BookName = $_POST['bookname'];
    $AuthorName = $_POST['authorname'];
    $ISBNNumber=$_POST['isbnNumber'];
    $PublisherName = $_POST['publisherName'];
    $year = $_POST['publisherYear'];
    $volume = $_POST['noOfPages'];
    $booktype = $_POST['booktype'];

    $sql = "INSERT INTO `bookname` (`bookname`, `authorname`, `isbnNumber`, `publisherName`, `publisherYear`, 'noOFPages' , 'booktype) VALUES ('$bookname', $authorname, ' $isbnNumber', '$publishername', ' $publisheryear'.,'$noOfPages',' $booktype')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML form</title>
    <style>
        div{
            width:400px;
            height:650px;
            padding:50px;
            margin-top: 10%;
            margin-left:35%;
            margin-right:30%;
            border:2px dashed rgb(3, 3, 39);
            float:center;
        }
    </style>
</head>
<body>
    <div>
        <form method="POST" action="form.html">
            <h1>   Fill the form with correct details...   </h1>
            Book Name <input type="text" name="BookName" placeholder="Enter Your Bookname" required><br><br>
            Author Name <input type="text" name="AuthorName" placeholder="Enter Author Name" required><br><br>
            ISBN Number <input type="text" name="ISBNNumber" placeholder="Enter ISBN Number" maxlength="10" pattern="\d{10}"><br><br>
            Publisher Name<input type="text" name="PublisherName" placeholder="Enter Publisher Name" required><br><br>
            
            Select Publication Year - <select name="year">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
            <br><br>

            Select Book Type -<br> 
             <input type="radio" name="booktype" value="Action" checked> Action<br>
            <input type="radio" name="booktype" value="Adventure"> Adventure<br>
             <input type="radio" name="booktype" value="Classics"> Classics<br>
              <input type="radio" name="booktype" value="Comics">Comic Book<br>
             <input type="radio" value="Graphic_Novel" name="booktype"> Graphic Novel<br>
            <input type="radio" value="Detective" name="booktype"> Detective <br>
             <input type="radio" value="Mystery" name="booktype"> Mystery<br>
             <input type="radio" value="Historical_Fiction" name="booktype">Historical Fiction <br>
            <input type="radio" value="Horror" name="booktype"> Horror <br>
             <input type="radio" value="Literary_Fiction" name="booktype">Literary Fiction <br>
             <br>
            Number Of Pages<br>
            <input type="range" name="volume" min="200" max="400"> <br><br>

            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>