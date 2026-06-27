<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Notice Board | Admin Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
:root{
  --primary:#4f46e5;
  --secondary:#0f172a;
  --bg:#f4f6fb;
  --card:#ffffff;
  --text:#1e293b;
  --muted:#64748b;
  --success:#16a34a;
  --danger:#dc2626;
}

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{background:var(--bg);color:var(--text);}

/* Layout */
.layout{display:flex;min-height:100vh;}

/* Sidebar */
.sidebar{
  width:260px;
  background:linear-gradient(180deg,#1e293b,#020617);
  color:#fff;
  padding:25px 20px;
  position:fixed;
  top:0;left:0;bottom:0;
}

.brand{
  font-size:22px;
  font-weight:700;
  margin-bottom:35px;
}

.menu a{
  display:block;
  padding:12px 15px;
  margin-bottom:10px;
  color:#cbd5f5;
  text-decoration:none;
  border-radius:10px;
  transition:.3s;
  font-size:15px;
}

.menu a:hover,
.menu a.active{
  background:rgba(79,70,229,.2);
  color:#fff;
}

/* Main */
.main{
  margin-left:260px;
  padding:30px;
  width:calc(100% - 260px);
}

/* Topbar */
.topbar{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:30px;
}

.topbar h1{
  font-size:24px;
  font-weight:600;
}

.admin-box{
  background:var(--card);
  padding:10px 16px;
  border-radius:12px;
  box-shadow:0 10px 20px rgba(0,0,0,.08);
  font-size:14px;
}

/* Page Title */
.page-title{
  font-size:22px;
  text-align: center;
  font-weight:600;
  margin-bottom:25px;
}

/* Cards */
.card-container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:20px;
  margin-bottom:35px;
}

.dashboard-card{
  background:var(--card);
  padding:22px;
  border-radius:18px;
  box-shadow:0 15px 25px rgba(0,0,0,.08);
  position:relative;
  overflow:hidden;
  transition:.3s;
}

.dashboard-card:hover{
  transform:translateY(-5px);
}

.dashboard-card::after{
  content:'';
  position:absolute;
  top:0;right:0;
  width:80px;height:80px;
  background:rgba(79,70,229,.12);
  border-radius:0 0 0 80px;
}

.dashboard-card h4{
  font-size:14px;
  color:var(--muted);
  margin-bottom:8px;
}

.dashboard-card h2{
  font-size:28px;
  font-weight:700;
}

/* Option Section */
.add-option-section{
  background:var(--card);
  padding:25px;
  border-radius:18px;
  box-shadow:0 15px 25px rgba(0,0,0,.08);
}

.add-option-section h3{
  margin-bottom:20px;
  font-size:16px;
}

.option-box{
  display:flex;
  gap:30px;
  flex-wrap:wrap;
}

.option-card{
  flex:1;
  min-width:250px;
  background:linear-gradient(135deg,#1e293b,#0f172a);
  color:#fff;
  padding:25px;
  border-radius:18px;
  transition:.3s;
}

.option-card:hover{
  transform:translateY(-6px);
}

.option-card h2{
  font-size:18px;
  margin-bottom:10px;
}

.option-card p{
  font-size:13px;
  color:#cbd5e1;
  margin-bottom:15px;
}

.action-btn{
  display:inline-block;
  padding:8px 16px;
  background:var(--primary);
  color:#fff;
  text-decoration:none;
  border-radius:8px;
  font-size:13px;
  transition:.3s;
}

.action-btn:hover{
  background:#4338ca;
}

footer{
  margin-top:40px;
  text-align:center;
  color:var(--muted);
  font-size:13px;
}
</style>
</head>

<body>

<div class="layout">

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="brand">📢 NoticeBoard</div>
    <nav class="menu">
      <a href="{{url('layout')}}">Dashboard</a>
      
    </nav>
  </aside>

  <!-- Main -->
  <main class="main">

    <div class="topbar">
      <h1>Admin Dashboard</h1>
      <div class="admin-box">👤 Welcome, {{session('admin')}}</div>
    </div>

    <h2 class="page-title">Add Notice Panel</h2>

    <!-- Top Cards -->
    <div class="card-container">
      <div class="dashboard-card">
        <h4>📢 Total Notices</h4>
        <h2>128</h2>
      </div>

      <div class="dashboard-card">
        <h4>📝 Exam Notices</h4>
        <h2>52</h2>
      </div>

      <div class="dashboard-card">
        <h4>🎉 Event Notices</h4>
        <h2>76</h2>
      </div>
    </div>

    <!-- Option Section -->
    <div class="add-option-section">
      <h3>What type of notice would you like to add?</h3>

      <div class="option-box">

        <div class="option-card">
          <h2>📘 Exam Notice</h2>
          <p>Add exam related notice</p>
          <a href="{{url('examadd')}}" class="action-btn">Add Exam</a>
        </div>

        <div class="option-card">
          <h2>🎉 Event Notice</h2>
          <p>Add a notice related to the event</p>
          <a href="{{url('addevent')}}" class="action-btn">Add Event</a>
        </div>

      </div>
    </div>

    <footer>
      © 2026 Digital Notice Board Management System | Final Year Project
    </footer>

  </main>

</div>

</body>
</html>