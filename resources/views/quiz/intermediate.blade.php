
@extends('template')
@section('content')

<style>
</style>
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quiz_db')
?>

<div class="col-lg-8 m-auto d-block w3-margin-top">
    <?php
        $q = "select * from questions where page_id='prolog.easy'";
        $query = mysqli_query($con, $q);
        while($rows = mysqli_fetch_array($query) ) {
    ?>
        <div class="card">
            <h4 class="card-header"> <?php echo $rows['questions'] ?> </h4>
        </div>

    <?php
        }
        ?>
</div>



@stop