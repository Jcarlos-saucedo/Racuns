Vue.component('my-modal',{
  template: `
            <div class="modal is-active">
              <div class="modal-background"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                  <p class="has-text-weight-bold modal-card-title">Inicar sesion</p>
                  <button class="delete" aria-label="close" @click="$emit('close')"></button>
                </header>
                <section class="modal-card-body">
                  <div class="box">

                    <div class="field">
                      <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Usuario">
                        <span class="icon is-small is-left">
                          <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                          <i class="fas fa-check"></i>
                        </span>
                      </p>
                    </div>
                    <div class="field">
                      <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Contraseña">
                        <span class="icon is-small is-left">
                          <i class="fas fa-lock"></i>
                        </span>
                      </p>
                    </div>

                  </div>
                </section>
                <footer class="modal-card-foot">
                  <div class="field">
                      <p class="control is-expanded">
                        <button class="button is-success ">
                          Inicar sesion
                        </button>
                      </p>
                    </div>
                </footer>
              </div>
            </div>
  `
})

new Vue({
  el: '#root',

  data:{
    showLoginModal:false 
  }
})

var bonot = $('#btnEnv');
var formulario1 = $('#form1');
var formulario2 = $('#form2');
var formulario3 = $('#form3');
var formulario4 = $('#form4');

bonot.on('click',function() {
  formulario1.submit();
  formulario2.submit();
  formulario3.submit();
  formulario4.submit();
});