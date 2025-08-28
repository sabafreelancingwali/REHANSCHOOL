<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>RehanSchool Clone — Home</title>
<style>
  /* Internal CSS - hero + modern card layout + responsive nav */
  :root{
    --accent:#6C63FF;
    --muted:#6b7280;
    --glass: rgba(255,255,255,0.06);
  }
  *{box-sizing:border-box;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
  body{margin:0;background:linear-gradient(180deg,#0f172a 0%, #071029 100%);color:#e6edf3;line-height:1.5}
  header{display:flex;justify-content:space-between;align-items:center;padding:20px 32px;backdrop-filter: blur(6px);}
  .brand{display:flex;gap:12px;align-items:center;cursor:pointer}
  .logo{
    width:52px;height:52px;border-radius:12px;display:grid;place-items:center;
    background:linear-gradient(135deg,var(--accent),#00c6ff);
    font-weight:700;color:white;font-size:18px;box-shadow:0 6px 18px rgba(108,99,255,0.18);
  }
  nav a{color:rgba(230,237,243,0.9);text-decoration:none;margin-left:18px;font-weight:600}
  nav a:hover{text-decoration:underline;opacity:0.95}
 
  .container{max-width:1100px;margin:28px auto;padding:0 20px}
  .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;margin-top:18px}
  .hero-card{background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
    border-radius:16px;padding:36px;box-shadow:0 10px 30px rgba(2,6,23,0.6);border:1px solid rgba(255,255,255,0.04)}
  h1{margin:0;font-size:34px;line-height:1.05}
  p.lead{color:var(--muted);margin-top:12px}
 
  .features{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:22px}
  .feat{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:18px;border-radius:12px;border:1px solid rgba(255,255,255,0.03)}
  .stat-grid{display:flex;gap:12px;margin-top:18px}
  .stat{background:var(--glass);padding:12px;border-radius:10px;text-align:center;min-width:110px}
 
  .card-right{padding:18px;border-radius:12px}
  .btn{display:inline-block;padding:10px 16px;border-radius:10px;background:var(--accent);color:white;font-weight:700;text-decoration:none;cursor:pointer;border:none}
  .btn.ghost{background:transparent;border:1px solid rgba(255,255,255,0.06)}
  footer{max-width:1100px;margin:50px auto;color:var(--muted);padding:0 20px}
 
  /* responsive */
  @media (max-width:920px){
    .hero{grid-template-columns:1fr; }
    nav{display:none}
    header{padding:14px}
  }
  @media (max-width:520px){
    h1{font-size:26px}
    .features{grid-template-columns:1fr}
  }
</style>
</head>
<body>
<header>
  <div class="brand" onclick="goTo('index.php')">
    <div class="logo">RS</div>
    <div>
      <div style="font-weight:800">RehanSchool</div>
      <div style="font-size:12px;color:rgba(230,237,243,0.7)">AI-enabled education • Entrepreneurial focus</div>
    </div>
  </div>
  <nav>
    <a href="javascript:goTo('index.php')">Home</a>
    <a href="javascript:goTo('curriculum.php')">Curriculum</a>
    <a href="javascript:goTo('facilitators.php')">Facilitators</a>
    <a href="javascript:goTo('contact.php')">Contact</a>
  </nav>
</header>
 
<main class="container">
  <section class="hero">
    <div class="hero-card">
      <h1>Learn. Create. Launch — Future-ready learning powered by AI.</h1>
      <p class="lead">RehanSchool clone: an education platform focusing on real-world skills, AI-enabled learning, and entrepreneurship for young learners.</p>
 
      <div class="features" aria-hidden="false">
        <div class="feat">
          <strong>AI-Enabled Curriculum</strong>
          <div style="color:var(--muted);margin-top:8px;font-size:14px">Adaptive lessons and personalised practice.</div>
        </div>
        <div class="feat">
          <strong>Holistic Development</strong>
          <div style="color:var(--muted);margin-top:8px;font-size:14px">Leadership, communication & critical thinking.</div>
        </div>
        <div class="feat">
          <strong>Entrepreneurial Focus</strong>
          <div style="color:var(--muted);margin-top:8px;font-size:14px">Build real projects & launch ideas.</div>
        </div>
      </div>
 
      <div class="stat-grid">
        <div class="stat"><div style="font-size:20px;font-weight:700">25</div><div style="font-size:12px;color:var(--muted)">Facilitators</div></div>
        <div class="stat"><div style="font-size:20px;font-weight:700">1,320</div><div style="font-size:12px;color:var(--muted)">Students</div></div>
        <div class="stat"><div style="font-size:20px;font-weight:700">6</div><div style="font-size:12px;color:var(--muted)">Campuses</div></div>
      </div>
 
      <div style="margin-top:20px">
        <button class="btn" onclick="goTo('curriculum.php')">Explore Curriculum</button>
        <button class="btn ghost" style="margin-left:8px" onclick="goTo('contact.php')">Get in touch</button>
      </div>
    </div>
 
    <aside class="card-right hero-card">
      <h3 style="margin:0 0 10px 0">Latest articles</h3>
      <div style="font-size:14px;color:var(--muted)">How AI helps personalised skill-building</div>
      <div style="margin-top:12px;font-size:14px;color:var(--muted)">Student startup — From idea to prototype in 8 weeks</div>
      <div style="margin-top:18px"><a class="btn" href="javascript:goTo('facilitators.php')">Meet our team</a></div>
    </aside>
  </section>
</main>
 
<footer>
  <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap">
    <div>© RehanSchool Clone • Built with ❤️</div>
    <div style="color:var(--muted)"><a href="javascript:goTo('contact.php')" style="color:inherit;text-decoration:underline">Contact</a></div>
  </div>
</footer>
 
<script>
  // JS handles page navigation (redirection)
  function goTo(path){
    // small transition effect could be added here
    window.location.href = path;
  }
</script>
</body>
</html>
