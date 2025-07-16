
<style>
   .paper-form {
      max-width: 700px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
</style>

  <!-- Paper Submission Section -->
  <div class="container mt-4">
    <div class="paper-form">
      <h4 class="section-title">Paper Submission</h4>
      <form>
        <div class="form-group">
          <label>Author Name</label>
          <input type="text" class="form-control" placeholder="Author full name" />
        </div>
        <div class="form-group">
          <label>Paper Title</label>
          <input type="text" class="form-control" placeholder="Title of the paper" />
        </div>
        <div class="form-group">
          <label>Keywords</label>
          <input type="text" class="form-control" placeholder="e.g. AI, Education, Technology" />
        </div>
        <div class="form-group">
          <label>Abstract</label>
          <textarea class="form-control" rows="6" placeholder="Enter your abstract here..."></textarea>
        </div>
        <div class="form-group">
          <label>Corresponding Email</label>
          <input type="email" class="form-control" placeholder="example@email.com" />
        </div>
        <div class="form-group">
          <label>Upload File <span class="file-label">(Word file only)</span></label>
          <input type="file" class="form-control" accept=".doc,.docx" />
        </div>
        <button type="submit" class="btn btn-primary btn-submit mt-3"><i class="fas fa-upload"></i> Submit Paper</button>
      </form>
    </div>
  </div>

