<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<section class="form" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
    <form name="formContato" method="post" onsubmit="return confirmSubmission(event)">

      <label data-aos="fade-left">Nome</label>
      <input type="text" name="name" required placeholder="Nome completo" autocomplete="off">

      <label data-aos="fade-left">Email</label>
      <input type="email" name="email" placeholder="Digite seu Email" autocomplete="off">

      <label data-aos="fade-left">Mensagem</label>
      <textarea name="message" placeholder="Digite sua Mensagem" required></textarea>

      <button type="submit" data-aos="fade-left" class="btn btn-primary">Enviar</button>
    
    </form>
  </section>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  
  <script>
    function confirmSubmission(event) {
      const confirmation = confirm("Tem certeza que deseja enviar esta mensagem?");
      if (!confirmation) {
        event.preventDefault(); 
      }
      return confirmation;
    }
  </script>