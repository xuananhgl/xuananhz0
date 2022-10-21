const  openVi = document.getElementById('js_open_vi')
const openEn = document.getElementById('js_open_es')
const  openFr = document.getElementById('js_open_fr')
const formVi = document.getElementById('vi-title')
const formEn = document.getElementById('en-title')
const  formFr = document.getElementById('title')
const  formAboutFr = document.getElementById('about')
const  formAboutVi = document.getElementById('vi-about')
const  formAboutEn = document.getElementById('en-about')
const  formButtonFr = document.getElementById('conten-button')
const  formButtonVi = document.getElementById('vi-button')
const  formButtonEn = document.getElementById('en-button')
function showVi(){
 formVi.classList.add('open')
 formFr.classList.add('close')
 formAboutVi.classList.add('open')
 formAboutFr.classList.add('close')
 formButtonVi.classList.add('open')
 formButtonFr.classList.add('close')
 formButtonEn.classList.remove('open')
}
function showEn(){

   formEn.classList.add('open')
   formVi.classList.remove('open')
   formFr.classList.add('close')
   formAboutFr.classList.add('close')
   formAboutVi.classList.remove('open')
   formAboutEn.classList.add('open')
   formButtonVi.classList.remove('open')
   formButtonEn.classList.add('open')
   formButtonFr.classList.add('close')
}
function showFr(){
   formFr.classList.remove('close')
   formAboutFr.classList.remove('close')
   formButtonFr.classList.remove('close')
   formButtonVi.classList.remove('open')
   formButtonEn.classList.remove('open')
}
openVi.addEventListener('click', showVi)
openEn .addEventListener('click', showEn)
openFr .addEventListener('click', showFr)
