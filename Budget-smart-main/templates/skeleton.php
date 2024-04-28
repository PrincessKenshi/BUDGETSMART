<?php
    include_once "../init.php";
    
    $pic = $getFromU->Photofetch($_SESSION['UserId']);
    $pic = '"'. $pic . '"';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/images/budgetsmart_logo.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="../static/css/skeleton.css">
    <link rel="stylesheet" href="../static/css/11-changepass.css">
    <link rel="stylesheet" href="../static/css/7-Datewise.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/css/yearpicker.css">
    <link rel="stylesheet" href="../static/css/6-Manage-Expenses.css">
    <script src="../static/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../static/js/yearpicker.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Budget Smart</title>
    
</head>

<body class="overlay-scrollbar sidebar-expand" style="background-color:#A7EBC2;">
    <!-- Navbar -->
    <div class="navbar" style="background-color: #BF71B9">
        <!-- nav-left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class='nav-link'>
                    <i class="fas fa-bars" onclick="collapseSidebar()" style="color:white;"></i>
                </a>
            </li>
            <li class="nav-item">
                <img src="..\static\images\budgetsmart_logo.png" alt="" class="logo">
            </li>
        </ul>

        <!-- end nav left  -->
        <h1 class="navbar-text" style="color:white;">Budget Smart</h1>
        <!-- nav right  -->
        <ul class="navbar-nav nav-right">
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" onclick = "switchTheme()">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </a>
            </li> -->
            <li class="nav-item">
                    <img src=<?php echo $pic ?> alt="" class="dropdown-toggle" data-toggle="user-menu" style="width:50px;height:50px;margin-right:10px;margin-top:5px;border-radius:30px;">
            </li>   
        </ul>
    </div>
    <!-- end navbar -->

    <style>
        .sidebar-nav-item:active {
    background-color: transparent; /* Remove background color on active state */
}

    .sidebar-nav-item:hover .sidebar-nav-link {
        background-color: #57487E; /* Change to the desired hover color */
    }

</style>
    <!-- sidebar -->
<div class="sidebar" style="background-color: #7066A6;margin-top:30px;">
    <ul class="sidebar-nav" id="sidebar-nav" style="margin-top:30px;">
    <li class="sidebar-nav-item">
    <div class="logo-container">
        <img src="..\static\images\logoo.png" alt="" class="logo" style="width:120px;height:70px;">
        <span class="brand-name">Budget Smart</span>
    </div>
</li>
<style>
    .logo-container {
    display: flex;
    align-items: center;
}

.brand-name {
    margin-right: 70px; /* Adjust the margin as needed */
    color: white; /* Text color for the brand name */
    font-size: 18px; /* Adjust the font size as needed */
    position: relative;
    text-align: center;
}
</style>

        <li class="sidebar-nav-item">
            <a href="3-Dashboard.php" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fas fa-tachometer-alt" style="color:white;"></i>
                </div>
                <span>
                    Dashboard
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="4-Set-Budget.php" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fas fa-coins" style="color:white;"></i>
                </div>
                <span>
                    Set Budget 
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" id="Expense" onclick="open1()">
            <a href="#" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fa fa-plus-circle" style="color:white;"></i>
                </div>
                <span>
                    Expenses
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" style="display: none;">
            <a href="5-Add-Expenses.php" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fas fa-arrow-right" aria-hidden="true" style="color:white;"></i>
                </div>
                <span>
                    Add Expenses
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" style="display: none">
            <a href="6-Manage-Expense.php" class="sidebar-nav-link" style="display: none;color:white;">
                <div>
                    <i class="fas fa-arrow-right" aria-hidden="true" style="color:white;"></i>
                </div>
                <span>
                    Manage Expenses
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" id="ER" onclick="open2()">
            <a href="#" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fas fa-calendar-day" style="color:white;"></i>
                </div>
                <span>
                    Expense Report
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" style="display:none;">
            <a href="7-Datewise.php" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fas fa-calendar-day" style="color:white;"></i>
                </div>
                <span>
                    Datewise Report
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" style="display: none;">
            <a href="8-Monthly.php" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-calendar-week"></i>
                </div>
                <span>
                    Monthly Report
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item" style="display:none;">
            <a href="9-Yearly.php" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-calendar"></i>
                </div>
                <span>
                    Yearly Report
                </span>
            </a>
        </li>
        <!-- Transfered Navbar Items -->
        <li class="sidebar-nav-item">
            <a href="10-Profile.php" class="sidebar-nav-link" style="color:white;">
                <div>
                    <i class="fas fa-user-tie" style="color:white;"></i>
                </div>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
    <div class="sidebar-nav-link signout" id="signout" style="color:white;">
        <div>
            <i class="fas fa-sign-out-alt" style="color:white;"></i>
        </div>
        <span>Logout</span>
    </div>

    <!-- Logout Pop-up -->
    <div class="out" id="out">
        <div class="out-body">
            <img src="../static/images/shemshi.png" alt="shemshi">
            <h2>Are you sure you want to sign out?</h2>
            <button id="nobtn">No</button>
            <a href="logout.php">
                <button id="yesbtn">Yes</button>
            </a>
        </div>
    </div>
    <!-- End Logout Pop-up -->
</li>

<style>
    
    .signout {
    text-decoration: none;
    color: white;
    cursor: pointer;
}

.signout:hover {
    color: rgb(57, 35, 78);
}

button {
    border-radius: 20px;
    border: 0;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
    color: black;
    cursor: pointer;
    padding: 10px 25px;
    color: white;
}

#nobtn {
    background-color: #B65C5C;
}

#yesbtn {
    background-color: #3C2B52;
}

button:active {
    opacity: 0.8;
}

.out {
    background-color: rgba(0, 0, 0, 0.3);
    opacity: 0;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    transition: all 0.3s ease-in-out;
    z-index: 999;

    display: none;
    align-items: center;
    justify-content: center;
}

.out.open {
    opacity: 1;
    display: flex;
}

.out-body {
    background-color: #E4D1FF;
    border-radius: 5px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
    padding: 0px 25px;
    text-align: center;
    width: 480px;
    height: 450px;
    position: relative;
    z-index: 1;
}

.out-body h2 {
    margin: 0;
    color: #3C2B52;
    padding: 20px;
}

.out-body img {
    width: 450px;
    height: 300px;
    position: relative;
    right: 5px;
}

    </style>
    </ul>
</div>

    <!-- end sidebar-->
    <!-- Main Content -->
    <!-- end main content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="../static/js/skeleton.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    
    const signoutBtn = document.getElementById("signout");
    const noBtn = document.getElementById("nobtn");
    const yesBtn = document.getElementById("yesbtn");
    const out = document.getElementById("out");

    signoutBtn.addEventListener("click", () => {
        out.classList.add("open");
    });

    noBtn.addEventListener("click", () => {
        out.classList.remove("open");
    });

    yesBtn.addEventListener("click", () => {
        out.classList.remove("open");
    });
});





</script>
</body>