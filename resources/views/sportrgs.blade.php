

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Digital Notice Board | Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>

/* ===== GOOGLE FONT ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* ===== RESET ===== */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

/* ===== BODY ===== */
body{
    background:#0f172a;
    color:#f1f5f9;
}

/* ===== LAYOUT ===== */
.layout{
    display:flex;
}

/* ===== SIDEBAR ===== */
.sidebar{
    width:260px;
    min-height:100vh;
    background:linear-gradient(180deg,#111827,#1e293b);
    padding:30px 20px;
    position:fixed;
    box-shadow:4px 0 20px rgba(0,0,0,0.5);
}

.brand{
    font-size:24px;
    font-weight:700;
    text-align:center;
    margin-bottom:40px;
    color:#3b82f6;
}

.menu a{
    display:block;
    padding:14px 18px;
    margin-bottom:15px;
    text-decoration:none;
    color:#cbd5e1;
    border-radius:10px;
    transition:0.3s;
    font-weight:500;
}

.menu a:hover{
    background:#2563eb;
    color:#fff;
    transform:translateX(6px);
}

.menu a.active{
    background:#3b82f6;
    color:#fff;
}

/* ===== MAIN CONTENT ===== */
.main{
    margin-left:260px;
    width:100%;
    padding:40px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.topbar h1{
    font-size:28px;
    font-weight:600;
    color:#f8fafc;
}

.admin-box{
    background:#1e293b;
    padding:10px 20px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.4);
}

/* ===== TABLE CONTAINER ===== */
.table-container{
    background:#1e293b;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.6);
}

/* ===== TABLE ===== */
table{
    width:100%;
    border-collapse:collapse;
}

th{
    padding:15px;
    text-align:left;
    font-size:14px;
    text-transform:uppercase;
    color:#3b82f6;
    border-bottom:2px solid #334155;
}

td{
    padding:16px;
    color:#e2e8f0;
    border-bottom:1px solid #334155;
}

/* ===== ROW HOVER ===== */
tbody tr{
    transition:0.3s;
}

tbody tr:hover{
    background:#334155;
}

/* ===== IMAGE STYLE ===== */
td img{
    border-radius:12px;
    object-fit:cover;
    border:3px solid #3b82f6;
    transition:0.3s;
}

td img:hover{
    transform:scale(1.08);
    box-shadow:0 0 20px rgba(59,130,246,0.6);
}

/* ===== RESPONSIVE ===== */
@media(max-width:900px){

    .layout{
        flex-direction:column;
    }

    .sidebar{
        position:relative;
        width:100%;
        min-height:auto;
    }

    .main{
        margin-left:0;
    }

    table, thead, tbody, th, td, tr{
        display:block;
    }

    thead{
        display:none;
    }

    tr{
        margin-bottom:20px;
        background:#1e293b;
        padding:15px;
        border-radius:15px;
    }

    td{
        border:none;
        position:relative;
        padding-left:50%;
        margin-bottom:10px;
    }

    td::before{
        content: attr(data-label);
        position:absolute;
        left:15px;
        font-weight:600;
        color:#3b82f6;
    }
}
/* ===== SEARCH FORM ===== */
.search-form{
    display:flex;
    gap:15px;
    margin-bottom:25px;
    background:#1e293b;
    padding:15px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.5);
    align-items:center;
    max-width:500px;
}

.search-form input{
    flex:1;
    padding:12px 15px;
    border:none;
    outline:none;
    border-radius:10px;
    background:#0f172a;
    color:#fff;
    font-size:14px;
    transition:0.3s;
}

.search-form input::placeholder{
    color:#94a3b8;
}

.search-form input:focus{
    border:1px solid #3b82f6;
    box-shadow:0 0 10px rgba(59,130,246,0.5);
}

.search-form button{
    padding:12px 20px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#3b82f6,#2563eb);
    color:#fff;
    font-weight:500;
    cursor:pointer;
    transition:0.3s;
}

.search-form button:hover{
    transform:translateY(-2px);
    box-shadow:0 5px 15px rgba(59,130,246,0.4);
}

.search-form button:active{
    transform:scale(0.95);
}
.w-5 {
    width:10px;
}
</style>


</head>
<body>

<div class="layout">
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="brand">📢 NoticeBoard</div>
    <nav class="menu">
      <a href="{{url('layout')}}" class="active">Dashboard</a>
      <!-- <a href="#">Add Notice</a>
      
      <a href="#">Manage Notice</a>
      <a href="{{url('viewsing')}}">Manage Users</a>
      <a href="{{url('viewadminsing')}}">Manage Admin</a> -->
      
    </nav>
  </aside>

  <!-- Main -->
  <main class="main">
    <div class="topbar">
      <h1>Admin Dashboard</h1>
      <!-- <div class="admin-box">👤 Admin</div> -->
      <div class="admin-box">👤 Welcome, {{session('admin')}}</div>
    </div>
<form class="search-form" action="{{URL::to('/searchsport')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Search user admin..." value={{@$search}}>
    <button type="submit">Search</button>
</form>
    <!-- Stats -->
    <div class="table-container">
<table>
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Enrollment Number</th>
        <th>Select Game</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        <td data-label="Sr.No">{{ $loop->iteration }}</td>
        <td data-label="Name">{{ $d->name }}</td>
        <td data-label="Enrollement Number">{{ $d->enrollment_number }}</td>
        <td data-label="Enrollement Number">{{ $d->game }}</td>
        
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
{{$data->links()}}

</div>

    <!-- <footer>
      © 2026 Digital Notice Board Management System | Final Year Project
    </footer> -->
  </main>
</div>

</body>
</html>
