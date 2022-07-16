let box1 = document.getElementById('ps1');
let box2 = document.getElementById('ps2');
let box3 = document.getElementById('ps3');
let box4 = document.getElementById('ps4');

box1.style.display = 'none';
box2.style.display = 'none';
box3.style.display = 'none';
box4.style.display = 'none';

let loadbtn = document.getElementById('loadbtn1');
let loadbtn2 = document.getElementById('loadbtn2');
loadbtn.style.display = 'flex';
loadbtn2.style.display = 'none';

loadbtn.onclick = () =>{
    // e.preventDefault();
    box1.style.display = 'flex';
    box2.style.display = 'flex';
    loadbtn.style.display = 'none';
    loadbtn2.style.display = 'flex';

}
loadbtn2.onclick = () =>{
    box3.style.display = 'flex';
    box4.style.display = 'flex';
    loadbtn2.style.display = 'none';

}






