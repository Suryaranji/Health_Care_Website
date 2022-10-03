let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
var called=true;
function checkup()
{
    if(called)
    {
    document.getElementById("check").innerHTML ="Doing a regular body check-up can \n "+
    "help doctors diagnose a disease before it poses high risk. Reduces the"
   + " risk of complication during treatment – once you are diagnosed "
    +"\nwith a health condition \nat an early stage, the \ncomplexity "
    +"and risk involved \nare less when compared to diagnosing \nat a very late stage."
    +"Full Bodey Checkup Provided at any Time  ";
    called=false;
}
else {
    document .getElementById("check").innerHTML="";
    called=true;

}

}
function Ambu()
{
    if(called)
    {
    document.getElementById("amb").innerHTML ="They can provide the medical "+
    " aid that is the need of the hour."+
    "The backbone of any ambulance service is "+
    "the medical professionals who treat the patient first. "+
    "They ensure to keep the vitals stable until they reach "+
    "the hospital, and the doctors proceed with the treatment.";
    called=false;
}
else {
    document .getElementById("amb").innerHTML="";
    called=true;

}

}
function doc()
{
    if(called)
    {
    document.getElementById("doc").innerHTML ="A health specialist, sometimes called a "+ 
    "public health specialist or health education specialist, "+ 
    "is a healthcare professional who specializes in assessing and"+
    " analyzing health conditions within an environment and recommending new processes or "+
    "solutions to improve the health of the citizens"+ 
    "in that environment";
    called=false;
}
else {
    document .getElementById("doc").innerHTML="";
    called=true;

}

}
function med()
{
    if(called)
    {
    document.getElementById("med").innerHTML ="We understand that you may sometimes require medicines in urgency and that is why we assure you the"+
    " fastest home delivery of your medicines. Also, "
    +"depending on the city you reside in, medicines can be delivered"+
    " in as less as 1 hour";
    called=false;
}
else {
    document .getElementById("med").innerHTML="";
    called=true;

}

}
function about()
{
    if(called)
    {
        document .getElementById("abo").innerHTML="However, hospitals have advance facilities"+
    " and technologies to sustain the lives of "+
    "the people. This place is not only treating "+
    "sickness but it also helps improving the health "+
    "of the community. Many hospitals are creating"+
    " programs that offer financial assistance "+
    "to patients who cannot afford to pay for hospital care";

    called=false;
    }
    else 
    {
        document .getElementById("abo").innerHTML="";
    called=true;
    }
}