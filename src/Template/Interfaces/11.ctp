<style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
}

*:focus{
outline: none;
}

body{
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background: #ff6767;
font-family: 'roboto', sans-serif;
}

.container{
position: relative;
height: 400px;
}

.select{
position: relative;
width: 200px;
height: 50px;
border-radius: 10px;
border: none;
text-transform: capitalize;s
color: #fff;
background: #292929;
text-align: left;
padding: 0 15px;
font-size: 20px;
cursor: pointer;
}

.select::after{
content: '';
position: absolute;
right: 20px;
top: 50%;
transform: translateY(-50%) rotate(45deg);
width: 6px;
height: 6px;
border-right: 2px solid #fff;
border-bottom: 2px solid #fff;
}

.select:hover{
background: #222222;
}

.select.active{
background: #222222;
border-bottom-left-radius: 0;
border-bottom-right-radius: 0;
}

.options{
position: absolute;
top: 40px;
left: 0;
width: 100%;
height: fit-content;
background: rgba(0, 0, 0, 0.5);
border-bottom-left-radius: 10px;
border-bottom-right-radius: 10px;
overflow: hidden;
display: none;
}

.options.active{
display: block;
margin-top: 18px;
}

.options .item{
color: #fff;
text-transform: capitalize;
width: 100%;
height: 30px;
padding: 0 15px;
line-height: 30px;
cursor: pointer;
}

.options .item.active{
background: #292929;
height: 50px;
}
</style>
<div class="container">
    <div class="select">options</div>
    <div class="options">
        <p class="item active">option 1</p>
        <p class="item">option 2</p>
        <p class="item">option 3</p>
        <p class="item">option 4</p>
    </div>
</div>
<script type="text/javascript">
const select = document.querySelector('.select');
const optionBox = document.querySelector('.options');
const options = [...document.querySelectorAll('.options .item')];

// let activeOption = 0; // default should be 0

window.onclick = (e) => {
if(!e.target.className.includes('select')){
    select.classList.remove('active');
    optionBox.classList.remove('active');
} else{
    select.classList.toggle('active');
    optionBox.classList.toggle('active');
}
}

// options.forEach((item, i) => {
//   item.onmousemove = () => {
//       hoverOptions(i);
//   }
// })

// const hoverOptions = (i) => {
//   options[activeOption].classList.remove('active');
//   options[i].classList.add('active');
//   activeOption = i;
//   setValue();
// }

// window.onkeydown = (e) => {
//   if(select.className.includes('active')){
//       e.preventDefault();
//       if(e.key === 'ArrowDown' && activeOption < options.length - 1){
//           hoverOptions(activeOption + 1);
//       } else if(e.key === 'ArrowUp' && activeOption > 0){
//           hoverOptions(activeOption - 1);
//       } else if(e.key === 'Enter'){
//           select.classList.remove('active');
//           optionBox.classList.remove('active');
//       }
//   }
// }

const setValue = () => {
select.innerHTML = select.value = options[activeOption].innerHTML;
}

setValue();
</script>
