

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Digital Notice Board | Admin Dashboard</title>
  <link rel="stylesheet" href="{{asset('css/admin/layout.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    
  </style>
</head>
<body>

<div class="layout">
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="brand">📢 NoticeBoard</div>
    <nav class="menu">
      <a href="{{url('layout')}}" class="active">Dashboard</a>
      <a href="{{url('Notice')}}">Add Notice</a>
    
      <a href="{{url('/DN')}}">Manage Notice</a>
      <a href="{{url('viewsing')}}">Manage Users</a>
      <a href="{{url('viewadminsing')}}">Manage Admin</a>
      <a href="{{url('sportrgs')}}">Sport Candidates  </a>
      <!-- <a href="{{url('sportrgs')}}"> sportrgs </a> -->
      <!-- <a href="{{url('examadd')}}">add exam </a>
      <a href="{{url('addevent')}}">add event </a> -->
      <a href="{{url('index')}}">Logout</a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="main">
    <div class="topbar">
      <h1>Admin Dashboard</h1>
      <!-- <div class="admin-box">👤 Admin</div> -->
      <div class="admin-box">👤 Welcome, {{session('admin')}}</div>
    </div>

    <!-- Stats -->
    <section class="cards">
      <div class="card">
        <h3>📢 Total Notices</h3>
        <h2>128</h2>
      </div>
      <div class="card">
        <h3>✅ Active Notices</h3>
        <h2>76</h2>
      </div>
      <div class="card">
        <h3>❌ Expired Notices</h3>
        <h2>52</h2>
      </div>
      <div class="card">
        <h3>👥 Total Users</h3>
        <h2>430</h2>
      </div>
    </section>

    <!-- Table -->
    <section class="table-box">
      <h2>Latest Notices</h2>
      <table>
        <thead>
          <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Publish Date</th>
            <th>Expire Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Semester Exam Schedule</td>
            <td>Academic</td>
            <td>10 Jan 2026</td>
            <td>20 Jan 2026</td>
            <td><span class="status active">Active</span></td>
            <td>
              <button class="btn btn-edit">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Holiday Announcement</td>
            <td>General</td>
            <td>01 Jan 2026</td>
            <td>05 Jan 2026</td>
            <td><span class="status expired">Expired</span></td>
            <td>
              <button class="btn btn-edit">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <footer>
      © 2026 Digital Notice Board Management System | Final Year Project
    </footer>
  </main>
</div>

</body>
</html>
