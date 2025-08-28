<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>RehanSchool Clone — Facilitators</title>
<style>
  *{box-sizing:border-box;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
  body{margin:0;background:#071029;color:#e6edf3}
  header{display:flex;justify-content:space-between;align-items:center;padding:18px 28px}
  .container{max-width:1100px;margin:18px auto;padding:0 20px}
  .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
  .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:18px;border-radius:12px;border:1px solid rgba(255,255,255,0.03);text-align:center}
  .avatar{width:84px;height:84px;border-radius:14px;display:inline-grid;place-items:center;font-weight:800;margin-bottom:12px;background:linear-gradient(135deg,#6C63FF,#00c6ff)}
  .social{margin-top:8px;color:#9aa4b2;font-size:13px}
  @media(max-width:1000px){.grid{grid-template-columns:repeat(2,1fr)}}
  @media(max-width:640px){.grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<header>
  <div style="display:flex;gap:12px;align-items:center;cursor:pointer" onclick="goTo('index.php')">
    <div style="width:44px;height:44px;background:linear-gradient(135deg,#6C63FF,#00c6ff);border-radius:10px;display:grid;place-items:center">RS</div>
    <div style="font-weight:800">RehanSchool</div>
  </div>
  <nav>
    <a href="javascript:goTo('index.php')" style="color:#e6edf3;margin-right:12px">Home</a>
    <a href="javascript:goTo('curriculum.php')" style="color:#e6edf3;margin-right:12px">Curriculum</a>
    <a href="javascript:goTo('contact.php')" style="color:#e6edf3">Contact</a>
  </nav>
</header>
 
<main class="container">
  <h2>Meet our facilitators</h2>
  <p style="color:#9aa4b2">Highly experienced educators, mentors and industry practitioners.</p>
 
  <section class="grid" style="margin-top:18px">
    <!-- facilitator 1 -->
    <div class="card">
      <div class="avatar">AR</div>
      <div style="font-weight:700">Ayesha Rehman</div>
      <div style="color:#9aa4b2;font-size:14px">Head of Curriculum & AI</div>
      <div class="social">Twitter • LinkedIn</div>
    </div>
 
    <!-- facilitator 2 -->
    <div class="card">
      <div class="avatar">SM</div>
      <div style="font-weight:700">Sami Mir</div>
      <div style="color:#9aa4b2;font-size:14px">Product Design Lead</div>
      <div class="social">Dribbble • LinkedIn</div>
    </div>
 
    <!-- facilitator 3 -->
    <div class="card">
      <div class="avatar">RN</div>
      <div style="font-weight:700">Rehan Nawaz</div>
      <div style="color:#9aa4b2;font-size:14px">Entrepreneur-in-Residence</div>
      <div class="social">LinkedIn</div>
    </div>
 
    <!-- add more as needed -->
  </section>
 
  <div style="margin-top:20px">
    <button style="background:#6C63FF;border:none;padding:10px 14px;border-radius:8px;color:white;font-weight:700" onclick="goTo('contact.php')">Invite a facilitator</button>
  </div>
</main>
 
<script>
  function goTo(path){ window.location.href = path; }
</script>
</body>
</html>
