<?php
include('adsession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator Site</title>
  <meta charset="utf-8">
  <script src="fetchusers.js" style="text/javascript" defer></script>
  <style>
  #main {
    height: 800px;
    width: 2500px;
  }
  h1 {
    text-align: center;
  }
  #userIndex {
    height: 650px;
    width: 140px;
    border: 2px solid black;
    margin-left: 500px;
    text-align: center;
    display: inline-block;
    overflow: auto;
  }
  #aucIndex {
    height: 650px;
    width: 140px;
    border: 2px solid black;
    margin-left: 500px;
    text-align: center;
    display: inline-block;
    overflow: auto;
  }
  #bidIndex {
    height: 650px;
    width: 140px;
    border: 2px solid black;
    margin-left: 500px;
    text-align: center;
    display: inline-block;
    overflow: auto;
  }
  #mechaIndex {
    height: 650px;
    width: 140px;
    border: 2px solid black;
    margin-left: 0px;
    text-align: center;
    display: inline-block;
    overflow: auto;
  }
  #next, #prev {
    margin-top: auto;
  }
  .detail {
    height: 650px;
    width: 350px;
    border: 2px solid black;
    margin-left: 50px;
    display: inline-block;
    position: absolute;
    overflow: auto;
  }
  li:hover {
    background-color: gray;
  }
  h2:hover {
    background-color: gray;
  }
  </style>
</head>
<body>
  <div id="main">
    <h1>Administrator Site</h1>
    <h1>Welcome <label style="color: red;"><?php echo $login_session; ?></label><a style="text-decoration: none;" href = "logout.php"> Sign Out</a></h1>

    <div id="mechaIndex">
      <h2>List of Mecha</h2>
      <ul><label id="mecha"></label></ul>
    </div>
    <div class="detail">
      <label><h1>Mecha Details</h1></label>
      <br>
      <label id="userDetail"></label>
      <br>
      <label id="characterList"></label>
      <label id="character"></label>
    </div>

    <div id="userIndex">
      <h2>List of Users</h2>
      <ul><label id="user"></label></ul>
      <input id="prev" type="button" value="Add User" onclick="addUser()">
      <input id="next" type="button" value="Remove user" onclick="removeUser()">
    </div>
    <div class="detail">
      <label><h1>Users Details</h1></label>
      <br>
      <label id="userDetail"></label>
      <br>
      <label id="characterList"></label>
      <label id="character"></label>
    </div>

    <div id="aucIndex">
      <h2>List of Auctions</h2>
      <ul><label id="spec"></label></ul>
      <input id="prev" type="button" value="Remove auction" onclick="removeAuction()">
      <input id="next" type="button" value="Close auction" onclick="closeAuction()">
    </div>
    <div class="detail">
      <label><h1>Auctions Details</h1></label>
      <br>
      <label id="specDetail"></label>
      <br>
      <label id="characterList"></label>
      <label id="character"></label>
    </div>

    <div id="bidIndex">
      <h2>List of Bids</h2>
      <ul><label id="spec"></label></ul>
      <input id="prev" type="button" value="Remove bids" onclick="removeBids()">
    </div>
    <div class="detail">
      <label><h1>Bids Details</h1></label>
      <br>
      <label id="specDetail"></label>
      <br>
      <label id="characterList"></label>
      <label id="character"></label>
    </div>
  </div>
</body>
</html>
