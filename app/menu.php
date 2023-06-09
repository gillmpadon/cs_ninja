<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="container">
        <div class="profile">
            <?php 
            require("connection/database.php");
            $numQuery = "SELECT * FROM quiz where Date(date_created) = CURDATE()";
            $numResult = mysqli_query($conn, $numQuery);
            if ($numResult){
                $numRows = mysqli_num_rows($numResult);
            }else{
                $numRows =0;
            }
            session_start();
            include('includes/user.php'); ?>
        </div>
        <div class="dashboard">
                <div class="entryDash active" id="menuItem" >
                    <p>MENU</p>
                    <svg onclick="goPage('menu')" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 1024 1024"><path fill="white" d="M160 448a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32H160zm448 0a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32H608zM160 896a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32H160zm448 0a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32H608z"/></svg>
                </div>
                <div class="entryDash active" onclick="goPage('menu')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><g fill="white"><path d="M11.47 3.84a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.06l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 0 0 1.061 1.06l8.69-8.69Z"/><path d="m12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.43Z"/></g></svg>
                    <p>HOME</p>
                </div>
                <div class="entryDash" id="quest" onclick="goPage('quest')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 512 512"><path fill="white" d="M297.688 21.063c-15.634.137-31.488 4.074-46.657 12.343c34.997-2.542 65.762 8.182 74.345 33.938c-128.86-16.852-260.25 113.34-31.72 245.187c62.006 35.773 19.38 127.795-104.31 75.095C24.494 317.39 36.47 186.86 95.844 118.562c7.322 12.328 13.418 26.194 18.936 40.75c19.067-48.595 56.388-68.62 93.595-88.812c-52.197-24.58-102.01-14.783-150.906 8.406c10.362 5.744 19.104 13.503 26.655 22.72c-113.558 67.915-77.773 280.4 71.406 366.53c189.853 109.61 414.786-132.238 208.157-211.062c-151.438-57.77-111.705-139.905-38.03-126.156l2.624 42.625l141.345 39.375l20.906-60.657c-28.94-12.513-52.207-26.577-71.092-43.843c1.268-28.244-10.66-56.505-33.907-84.75c.757 13.793.603 27.582-1.592 41.376c-22.21-28.084-53.733-44.287-86.25-44zm43.437 65.374c23 7.268 44.722 20.866 62 44.094c-33.73 15.82-69.124-5.32-62-44.093z"/></svg>
                    <p>QUEST</p>
                    <div id="questNum">
                        <p><?php echo "(".$numRows.")" ?></p>
                    </div>
                </div>
                <div class="entryDash" onclick="goPage('leaderboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="white" d="M11 10h2c1.414 0 2.121 0 2.56.44c.44.439.44 1.146.44 2.56v6c0-1.414 0-2.121.44-2.56C16.878 16 17.585 16 19 16c1.414 0 2.121 0 2.56.44c.44.439.44 1.146.44 2.56v3H2c0-1.414 0-2.121.44-2.56C2.878 19 3.585 19 5 19c1.414 0 2.121 0 2.56.44C8 19.878 8 20.585 8 22v-9c0-1.414 0-2.121.44-2.56C8.878 10 9.585 10 11 10Zm.146-6.977C11.526 2.34 11.716 2 12 2c.284 0 .474.34.854 1.023l.098.176c.108.194.162.29.246.354c.085.064.19.088.4.135l.19.044c.738.167 1.107.25 1.195.532c.088.283-.164.577-.667 1.165l-.13.152c-.143.167-.215.25-.247.354c-.032.104-.021.215 0 .438l.02.203c.076.785.114 1.178-.115 1.352c-.23.175-.576.015-1.267-.303l-.178-.082c-.197-.09-.295-.136-.399-.136c-.104 0-.202.046-.399.136l-.178.082c-.691.318-1.037.478-1.267.303c-.23-.174-.191-.567-.115-1.352l.02-.203c.021-.223.032-.334 0-.438c-.032-.103-.104-.187-.247-.354l-.13-.152c-.503-.588-.755-.882-.667-1.165c.088-.282.457-.365 1.195-.532l.19-.044c.21-.047.315-.07.4-.135c.084-.064.138-.16.246-.354l.098-.176Z"/></svg>
                    <p>LEADERBOARDS</p>
                </div>
                <div class="entryDash" onclick="goPage('setting')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="white" d="m12 1l9.5 5.5v11L12 23l-9.5-5.5v-11L12 1Zm0 14a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z"/></svg>
                    <p>SETTINGS</p>
                </div>
                <?php if($id==1){ ?>
                    <div class="entryDash" onclick="goPage('addQuest')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="white" d="m16 21l-.3-1.5q-.3-.125-.563-.263T14.6 18.9l-1.45.45l-1-1.7l1.15-1q-.05-.35-.05-.65t.05-.65l-1.15-1l1-1.7l1.45.45q.275-.2.538-.337t.562-.263L16 11h2l.3 1.5q.3.125.563.275t.537.375l1.45-.5l1 1.75l-1.15 1q.05.3.05.625t-.05.625l1.15 1l-1 1.7l-1.45-.45q-.275.2-.537.338t-.563.262L18 21h-2ZM2 20v-2.8q0-.825.425-1.55t1.175-1.1q1.275-.65 2.875-1.1T10 13h.35q.15 0 .3.05q-.725 1.8-.6 3.575T11.25 20H2Zm15-2q.825 0 1.413-.588T19 16q0-.825-.588-1.413T17 14q-.825 0-1.413.588T15 16q0 .825.588 1.413T17 18Zm-7-6q-1.65 0-2.825-1.175T6 8q0-1.65 1.175-2.825T10 4q1.65 0 2.825 1.175T14 8q0 1.65-1.175 2.825T10 12Z"/></svg>
                        <p>MANAGE QUEST</p>
                    </div>
                <?php } ?>

        </div>
    </div>
    <audio id="background-music" src="music/bg_music.mp3" loop style="display:none;"></audio>
    <script src="mainscript.js"></script>

</body>
</html>