<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>RehanSchool Clone — Curriculum</title>
<style>
  :root{--accent:#6C63FF;--muted:#6b7280}
  *{box-sizing:border-box;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
  body{margin:0;background:#071029;color:#e6edf3}
  header{display:flex;justify-content:space-between;align-items:center;padding:18px 28px}
  .logo{display:flex;gap:10px;align-items:center;cursor:pointer}
  .container{max-width:1000px;margin:24px auto;padding:0 20px}
  .hero{background:linear-gradient(90deg, rgba(108,99,255,0.12), rgba(0,198,255,0.06));padding:26px;border-radius:12px}
  h1{margin:0}
  .grid{display:grid;grid-template-columns:2fr 1fr;gap:18px;margin-top:18px}
  .module{background:rgba(255,255,255,0.03);padding:16px;border-radius:12px;border:1px solid rgba(255,255,255,0.03)}
  .pill{display:inline-block;padding:6px 10px;border-radius:999px;background:rgba(255,255,255,0.02);font-weight:700;margin-right:8px}
  ul{margin:8px 0 0 18px;color:var(--muted)}
  @media(max-width:820px){.grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<header>
  <div class="logo" onclick="goTo('index.php')">
    <div style="width:44px;height:44px;background:linear-gradient(135deg,#6C63FF,#00c6ff);border-radius:10px;display:grid;place-items:center">RS</div>
    <div>
      <div style="font-weight:800">RehanSchool</div>
      <div style="font-size:12px;color:var(--muted)">Curriculum overview</div>
    </div>
  </div>
  <nav>
    <a href="javascript:goTo('index.php')" style="color:#e6edf3;margin-right:12px">Home</a>
    <a href="javascript:goTo('facilitators.php')" style="color:#e6edf3;margin-right:12px">Facilitators</a>
    <a href="javascript:goTo('contact.php')" style="color:#e6edf3">Contact</a>
  </nav>
</header>
 
<main class="container">
  <section class="hero">
    <h1>Innovative, project-first curriculum</h1>
    <p style="color:var(--muted);margin-top:8px">Blending AI tools, hands-on projects and soft-skills — designed for learners who want to build startups and real products.</p>
  </section>
 
  <div class="grid">
    <div>
      <div class="module">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <div>
            <span class="pill">K-5</span><span class="pill">Foundation</span>
            <h3 style="margin:8px 0 6px 0">Foundations & Computational Thinking</h3>
            <div style="color:var(--muted)">Playful coding, logic puzzles, basic AI literacy.</div>
          </div>
          <div style="text-align:right">
            <div style="font-size:20px;font-weight:800">8 wks</div>
            <div style="font-size:12px;color:var(--muted)">module</div>
          </div>
        </div>
        <ul>
          <li>Block-based programming projects</li>
          <li>Design thinking sessions</li>
          <li>Mini entrepreneurship games</li>
        </ul>
      </div>
 
      <div class="module" style="margin-top:14px">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <div>
            <span class="pill">6-9</span><span class="pill">Intermediate</span>
            <h3 style="margin:8px 0 6px 0">AI Tools & Product Design</h3>
            <div style="color:var(--muted)">Integrate AI assistant workflows into student projects.</div>
          </div>
          <div style="text-align:right">
            <div style="font-size:20px;font-weight:800">12 wks</div>
            <div style="font-size:12px;color:var(--muted)">module</div>
          </div>
        </div>
        <ul>
          <li>Prototype product features using simple AI</li>
          <li>Storyboarding & UX basics</li>
          <li>Presentation & pitching practice</li>
        </ul>
      </div>
 
      <div class="module" style="margin-top:14px">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <div>
            <span class="pill">10+</span><span class="pill">Advanced</span>
            <h3 style="margin:8px 0 6px 0">Startup Launchpad</h3>
            <div style="color:var(--muted)">Build a minimum viable product and launch to users.</div>
          </div>
          <div style="text-align:right">
            <div style="font-size:20px;font-weight:800">16 wks</div>
            <div style="font-size:12px;color:var(--muted)">module</div>
          </div>
        </div>
        <ul>
          <li>Product-market fit experiments</li>
          <li>Metrics & basic analytics</li>
          <li>Fundraising & team building basics</li>
        </ul>
      </div>
    </div>
 
    <aside>
      <div class="module">
        <h4 style="margin:0 0 8px 0">Why our approach</h4>
        <p style="color:var(--muted);font-size:14px">We teach students to use AI as a tool — not replace their thinking. Emphasis is on creativity, teamwork and launching products.</p>
      </div>
 
      <div class="module" style="margin-top:12px">
        <h4 style="margin:0 0 8px 0">Skills gained</h4>
        <ul style="color:var(--muted)">
          <li>Problem framing</li>
          <li>Rapid prototyping</li>
          <li>Pitching & storytelling</li>
        </ul>
      </div>
 
      <div class="module" style="margin-top:12px;text-align:center">
        <button class="btn" style="background:var(--accent);padding:10px 14px;border-radius:8px;border:none;color:white;font-weight:700" onclick="goTo('contact.php')">Enroll / Ask a question</button>
      </div>
    </aside>
  </div>
</main>
 
<script>
  function goTo(path){ window.location.href = path; }
</script>
</body>
</html>
