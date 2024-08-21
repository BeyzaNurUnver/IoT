<?php
include("db.php");

$sql = "SELECT lumen,temperature,rain FROM Iot_data WHERE id=1";
$query_select = mysqli_query($conn,$sql);
if ($row = mysqli_fetch_array($query_select)){
    $lumen=$row["lumen"];
    $temperature=$row["temperature"];
    $rain=$row["rain"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT Project</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
            <div class="logo">
            <img src="" alt="">
            <h2>BNU</span></h2>
            </div>
            <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
            </div>
        </div>
        <div class="sidebar">
            <a href="#" class="deactive">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
            </a>
            <a href="#" class="deactive">
            <span class="material-icons-sharp">sensors</span>
            <h3>Sensors</h3>
            </a>
            <a href="#" class="deactive">
            <span class="material-icons-sharp">chat</span>
            <h3>Messages</h3>
            <span class="message-count">9</span>
            </a>
            <a href="#" class="deactive">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
            </a>
            <a href="#" class="deactive">
            <span class="material-icons-sharp">contact_support</span>
            <h3>Contact</h3>
            </a>
            <a href="#" class="deactive">
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
            </a>
        </div>
        </aside>

        <main>
        <h1>Dashboard</h1>
        <div class="date">
            <span id="date"></span>
        </div>
        <div class="datas">
            <div class="temperature">
            <span class="material-icons-sharp">thermostat</span>
            <div class="middle">
                <div class="left">
                    <h3>Temperature</h3>
                    <h1>                
                        <?php echo '<br> '.$temperature.' C' ?>
                    </h1>
                </div>

            </div>
            <small class="text-muted">Last 24 hours</small>
            </div>

            <div class="rain">
            <span class="material-icons-sharp">thunderstorm</span>
            <div class="middle">
                <div class="left">
                <h3>Rain Situations</h3>
                <?php 
                    if($rain=='1'){
                        $rain_text = 'It is raining';
                    }   
                    else{
                        $rain_text = 'It is not raining';
                    }
                ?>
                <h1>
                    <?php echo '<br> '.$rain_text.' .' ?>
                </h1>
                </div>

            </div>
            <small class="text-muted">Last 24 hours</small>
            </div>

            <div class="lumen">
            <span class="material-icons-sharp">tungsten</span>
            <div class="middle">
                <div class="left">
                <h3>Is it dark or light</h3>
                <?php 
                    if($lumen=='1'){
                        $lumen_text = 'There is light';
                    }   
                    else{
                        $lumen_text = 'There is no light';
                    }
                ?>
                <h1>              
                    <?php echo '<br> '.$lumen_text.' .' ?>
                </h1>
                </div>
            </div>
            <small class="text-muted">Last 24 hours</small>
            </div>

        </div>
        <!-- Buttons -->
        <div class="datas">
            <div class="temperature">
            <span class="material-icons-sharp">air</span>
            <div class="middle">
                <div class="left">
                <h3>Open/Close Fan</h3>
                <form action="" method="post">
                    <input type="hidden" name="action" value="submit" />
                    <input id="open-submit" type="submit" name="submit" value="Open Fan">
                    <input id="close-submit" type="submit" name="submit" value="Close Fan">
                </form>

                </div>
            </div>
            <small class="text-muted">Last 24 hours</small>
            </div>


            <div class="rain">
            <span class="material-icons-sharp">sensor_door</span>
            <div class="middle">
                <div class="left">
                <h3>Open/Close Door</h3>
                <form action="" method="post">
                    <input type="hidden" name="action" value="submit" />
                    <input id="open-submit" type="submit" name="submit" value="Open Door">
                    <input id="close-submit" type="submit" name="submit" value="Close Door">
                </form>
                </div>

            </div>
            <small class="text-muted">Last 24 hours</small>
            </div>

            <div class="lumen">
            <span class="material-icons-sharp">flash_on</span>
            <div class="middle">
                <div class="left">
                <h3>Open/Close Light</h3>
                <form action="" method="post">
                    <input type="hidden" name="action" value="submit" />
                    <input id="open-submit" type="submit" name="submit" value="Open Light">
                    <input id="close-submit" type="submit" name="submit" value="Close Light">
                </form>
                </div>

            </div>
            <small class="text-muted">Last 24 hours</small>
            </div>
        </div>

        <div class="notifications">
            <h2>Notifications</h2>
            <div class="updates">
            <div class="update">
                <div class="profile-photo">
                <span class="material-icons-sharp">account_circle</span>
                </div>
                <div class="message">
                <p><b>Person A</b>13.1.2 update is available</p>
                <small class="text-muted">3 Minutes Ago</small>
                </div>
            </div>
            <div class="update">
                <div class="profile-photo">
                <span class="material-icons-sharp">account_circle</span>
                </div>
                <div class="message">
                <p><b>Person A</b>13.1.2 update is available</p>
                <small class="text-muted">3 Minutes Ago</small>
                </div>
            </div>
            <div class="update">
                <div class="profile-photo">
                <span class="material-icons-sharp">account_circle</span>
                </div>
                <div class="message">
                <p><b>Person A</b>13.1.2 update is available</p>
                <small class="text-muted">3 Minutes Ago</small>
                </div>
            </div>
            </div>
        </div>
        </main>

        <div class="right">
        <div class="top">
            <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
            </div>
            <div class="profile">
            <div class="info">
                <p>Hi, <b>Beyza</b></p>
                <small class="text-muted">Admin</small>
            </div>
            </div>
        </div>

        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>

<?php
if (isset($_POST['action'])) {
    if($_POST['submit']=="Open Door"){
        $window_data = 1;
        $sql =  "UPDATE Iot_data SET window='$window_data' WHERE id=1";
        $query_update = mysqli_query($conn,$sql);
    }
    else if($_POST['submit']=="Close Door"){
        $window_data = 0;
        $sql = "UPDATE Iot_data SET window='$window_data' WHERE id=1";
        $query_update = mysqli_query($conn,$sql);
    }
    else if($_POST['submit']=="Open Light"){
        $light_data = 1;
        $sql = "UPDATE Iot_data SET light='$light_data' WHERE id=1";
        $query_update = mysqli_query($conn,$sql);
    }
    else if($_POST['submit']=="Close Light"){
        $light_data = 0;
        $sql = "UPDATE Iot_data SET light='$light_data' WHERE id=1";
        $query_update = mysqli_query($conn,$sql);
    }
    else if($_POST['submit']=="Open Fan"){
        $fan_data = 1;
        $sql = "UPDATE Iot_data SET fan='$fan_data' WHERE id=1";
        $query_update = mysqli_query($conn,$sql);
    }
    else if($_POST['submit']=="Close Fan"){
        $fan_data = 0;
        $sql =  "UPDATE Iot_data SET fan='$fan_data' WHERE id=1";
        $query_update = mysqli_query($conn,$sql);
    }
}
?>