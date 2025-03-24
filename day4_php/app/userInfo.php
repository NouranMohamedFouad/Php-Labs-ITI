<?php

    require_once "../mysqli/databaseOperations.php";

    $idToRetrieve = $_POST['id'];
    $data=selectById($idToRetrieve);
?>


<head>
    <style>
        body{
            background-color: rgb(32, 30, 30);
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .card-body{
            background-color: rgba(228, 228, 228, 0.849);
            text-align: center;
        }
        h1{
            color:white;
            margin-left:20%;
        }
        .review{
            font-size:larger;
            border-radius:10px;
            padding:3px;
            border:2px solid black;
            box-shadow:5px 5px 10px black;

        }
    </style>
</head>
<body>
<div id="resultCard" class="mt-4">
    <?php echo " <a class='btn btn-warning' href='usersRetrieval.php'>Go Back</a>" ?> 
    <br>
    <br>

    <div class="card shadow">
        <div class="card-body">
            <p class="review">
                <strong>Your Information</strong>
            </p>
            
            <p>
                <strong>Name:</strong> 
                <?php echo $data["name"];?>
            </p>
            <p>
                <strong>Email:</strong>
                <?php echo $data["email"];?>
            </p>
            <p>
                <strong>Password:</strong>
                <?php echo $data["password"];?>
            </p>
            <p>
                <strong>Room no.:</strong> 
                <?php echo $data["room"];?>
            </p>
            <p>
                <strong>Extension:</strong>
                <?php echo $data["ext"];?>
            </p>
            <img src="<?php echo $data["image"]; ?>" alt="Uploaded Image" />

        </div>
    </div>
</div>
