<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>vue php crud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container{
            width:960px;
            margin: auto;
            margin-top:44px;
        }
        .lfloat{
            float : left;
        }
        .rfloat{
            float: right;
        }
        .clear{
            clear: both;
        }
        h1{
            font-size: 22px;
        }
        .addNew{
            padding: 2px 9px;
        }
        
        table.list{
            width:100%;
            margin-top:33px;
        }
        table.list th{
            background: #0E5196;
            color: #ffffff;
            padding: 9px;
        }
        table.list td{
            padding: 9px;
            text-align: center;
        }
        table.list tr{
            background: #EEEEEE;
        }

        button{
            padding: 2px 9px;

        }
        .modal{
            position: fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background: rgba(0,0,0, 0.4);
        }
        .modalContainer{
            width: 555px;
            background: #ffffff;
            margin: auto;
            margin-top: 44px;
        }
        .modelHeading{
            padding:10px;
            background:#06307C;
            color:#ffffff;
        }
        .modalContent{
            min-height: 333px;
            padding:44px;
        }
        .close{
            background: #D73131;
            padding: 2px 9px;
            border: none;
        }
        table.form input, table.form td{
            padding:6px;
        }
        p.successMessege{
            background: #D8EFC2;
            color: #097133;
            border-left: 5px solid #097133;
            padding: 9px;
            margin: 22px 0;
        }
        p.errorMessege{
            background: #EFCBC2;
            color: #D17517;
            border-left: 5px solid #D17517;
            padding: 9px;
            margin: 22px 0;
        }
    </style>
</head>
<body>
    <div id="root">
        <div class="container">
            <h1 class="lfloat">LIST OF USERS</h1>
            <button class="rfloat" @click="showAddUser=true">Add New User</button>
            <div class="clear"></div>
            <hr>
            
            <p class="errorMessege" v-if='errorMessege'>
                {{errorMessege}}
            </p>
            <p class="successMessege" v-if='successMessege'>
                {{successMessege}}
            </p>

            {{status}}

            <table class="list">
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                <tr v-for="user in users">
                    <td>{{user.id}}</td>
                    <td>{{user.username}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.phone}}</td>
                    <td>
                        <button @click="showEditUser=true">Edit</button>
                    </td>
                    <td>
                        <button @click="showDeleteUser=true">Delete</button>
                    </td>
                </tr>
            </table>

            <!-- add user -->
            <div class="modal" id="addModal" v-if="showAddUser">
                <div class="modalContainer">
                    <div class="modelHeading">
                        <p class="lfloat">Add New User</p>
                        <button class="rfloat close" @click="showAddUser">x</button>
                        <div class="clear"></div>
                    </div>
                    <div class="modalContent">
                        <form action="">
                            <table class="form">
                                <tr>
                                    <th>Username : </th>
                                    <td><input type="text" name=""></td>
                                </tr>
                                <tr>
                                    <th>Username : </th>
                                    <td><input type="text" name=""></td>
                                </tr>
                                <tr>
                                    <th>Username : </th>
                                    <td><input type="text" name=""></td>
                                </tr>
                                <tr>
                                    <td><button @click="showAddUser=false;">Save</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>


            <!-- edit user -->
            <div class="modal" id="editModal" v-if="showEditUser">
                <div class="modalContainer">
                    <div class="modelHeading">
                        <p class="lfloat">Add New User</p>
                        <button class="rfloat close" @click="showEditUser">x</button>
                        <div class="clear"></div>
                    </div>
                    <div class="modalContent">
                        <form action="">
                            <table class="form">
                                <tr>
                                    <th>Username : </th>
                                    <td><input type="text" name="username"></td>
                                </tr>
                                <tr>
                                    <th>Email : </th>
                                    <td><input type="text" name="email"></td>
                                </tr>
                                <tr>
                                    <th>Phone : </th>
                                    <td><input type="text" name="phone"></td>
                                </tr>
                                <tr>
                                    <td><button @click="showEditUser=false;">Update</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>


            <!-- delete user -->
            <div class="modal" id="deleteModal" v-if="showDeleteUser">
                <div class="modalContainer">
                    <div class="modelHeading">
                        <p class="lfloat">Add New User</p>
                        <button class="rfloat close" @click="showDeleteUser">x</button>
                        <div class="clear"></div>
                    </div>
                    <div class="modalContent">
                        <form action="">
                            <p>Kamu Akan Menghapusnya ...</p>
                            <br>
                            <button>Yes</button>
                            <button>No</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="vue.min.js"></script>
    <script src="axios.min.js"></script>
    <script src="app.js"></script>
</body>