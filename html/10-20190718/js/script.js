var imageElement = document.getElementById('image');
console.log(imageElement.src);
var bongden= fasle;
function doiAnh()
{

    if(bongden)
    {
        imageElement.src='./pic_bulbon.gif';
    }
    else 
    {
        imageElement.src='./pic_bulboff.gif';
    }
}
var array=['Thach','Dang','haha','hehe','hihi'];
    for(var i=0;i<array.length;++i)
{
    console.log( i + array[i]);
    document.getElementById('p-' + i ).innerHTML=array[i];
}