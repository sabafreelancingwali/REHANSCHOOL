<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Contact — RehanSchool Clone</title>
<style>
  *{box-sizing:border-box;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
  body{margin:0;background:#071029;color:#e6edf3}
  header{display:flex;justify-content:space-between;align-items:center;padding:18px 28px}
  .container{max-width:900px;margin:26px auto;padding:0 18px}
  .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:20px;border-radius:12px;border:1px solid rgba(255,255,255,0.03)}
  label{display:block;margin-top:12px;font-size:14px;color:#b9c6d6}
  input,textarea{width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.06);background:transparent;color:#e6edf3;margin-top:6px}
  button{margin-top:12px;padding:10px 14px;border-radius:8px;border:none;background:#6C63FF;color:white;font-weight:700;cursor:pointer}
  .muted{color:#9aa4b2;font-size:14px;margin-top:8px}
  .msg{margin-top:12px;padding:10px;border-radius:8px}
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
    <a href="javascript:goTo('facilitators.php')" style="color:#e6edf3">Facilitators</a>
  </nav>
</header>
 
<main class="container">
  <div class="card">
    <h2 style="margin:0">Contact us</h2>
    <div class="muted">Email: hello@rehanschool.example • Phone: +92 300 0000000</div>
 
    <form id="contactForm" onsubmit="submitForm(event)" autocomplete="off">
      <label>Name<span style="color:#ffb4b4">*</span></label>
      <input name="name" required />
 
      <label>Email<span style="color:#ffb4b4">*</span></label>
      <input name="email" type="email" required />
 
      <label>Subject</label>
      <input name="subject" />
 
      <label>Message<span style="color:#ffb4b4">*</span></label>
      <textarea name="message" rows="6" required></textarea>
 
      <button id="submitBtn" type="submit">Send message</button>
      <div id="status" style="margin-top:10px"></div>
    </form>
  </div>
</main>
 
<script>
  function goTo(path){ window.location.href = path; }
 
  async function submitForm(e){
    e.preventDefault();
    const form = document.getElementById('contactForm');
    const btn = document.getElementById('submitBtn');
    const status = document.getElementById('status');
    btn.disabled = true; btn.textContent = 'Sending...';
    status.textContent = '';
 
    const data = new FormData(form);
 
    try {
      const resp = await fetch('contact_submit.php', {
        method:'POST',
        body: data
      });
      const json = await resp.json();
      if(json.status === 'ok'){
        status.textContent = 'Message sent — thank you!';
        status.style.color = '#8ef5b8';
        form.reset();
      } else {
        status.textContent = 'Error: ' + (json.message || 'Something went wrong');
        status.style.color = '#ff9b9b';
      }
    } catch (err){
      status.textContent = 'Network error';
      status.style.color = '#ff9b9b';
    } finally {
      btn.disabled = false; btn.textContent = 'Send message';
    }
  }
</script>
</body>
</html>
