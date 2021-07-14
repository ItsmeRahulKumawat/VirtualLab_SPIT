

@extends('template')
@section('content')

<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quiz_db')

?>

<div class="col-lg-8 m-auto d-block w3-margin-top">
<form action="check.php" method="post">
    <?php
        $q = "select * from questions where page_id='prolog.easy'";
        $query = mysqli_query($con, $q);

        $num=0;
        while($rows = mysqli_fetch_array($query) ) {
            $num = $num +1;
            ?>
        <div class="card">
            <h4 class="card-header"> <?php echo $num.") ". $rows['questions'] ?> </h4>

            <?php

                $q = "select * from answers where ans_id =1";
                    $query = mysqli_query($con, $q);

                    while($rows = mysqli_fetch_array($query) ) {
                    ?>
                        
                    <div class="card-body">
                        <input type="radio" name="quizcheck[]" value="<?php $rows['aid'] ?>">
                            <?php echo $rows['answers'] ?>
                    </div>
        

    <?php
        }
    }
        ?>
</form>
</div>
</div>



@stop