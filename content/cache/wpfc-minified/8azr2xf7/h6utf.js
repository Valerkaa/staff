var post_id=0,post_rating=0,is_being_rated=!1;ratingsL10n.custom=parseInt(ratingsL10n.custom);ratingsL10n.max=parseInt(ratingsL10n.max);ratingsL10n.show_loading=parseInt(ratingsL10n.show_loading);ratingsL10n.show_fading=parseInt(ratingsL10n.show_fading);
function current_rating(a,b,c){if(!is_being_rated){post_id=a;post_rating=b;if(ratingsL10n.custom&&2==ratingsL10n.max)jQuery("#rating_"+post_id+"_"+b).attr("src",eval("ratings_"+b+"_mouseover_image.src"));else for(i=1;i<=b;i++)ratingsL10n.custom?jQuery("#rating_"+post_id+"_"+i).attr("src",eval("ratings_"+i+"_mouseover_image.src")):jQuery("#rating_"+post_id+"_"+i).attr("src",ratings_mouseover_image.src);jQuery("#ratings_"+post_id+"_text").length&&(jQuery("#ratings_"+post_id+"_text").show(),jQuery("#ratings_"+
post_id+"_text").html(c))}}
function ratings_off(a,b,c){if(!is_being_rated){for(i=1;i<=ratingsL10n.max;i++)i<=a?ratingsL10n.custom?jQuery("#rating_"+post_id+"_"+i).attr("src",ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_"+i+"_on."+ratingsL10n.image_ext):jQuery("#rating_"+post_id+"_"+i).attr("src",ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_on."+ratingsL10n.image_ext):i==b?ratingsL10n.custom?jQuery("#rating_"+post_id+"_"+i).attr("src",ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_"+
i+"_half"+(c?"-rtl":"")+"."+ratingsL10n.image_ext):jQuery("#rating_"+post_id+"_"+i).attr("src",ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_half"+(c?"-rtl":"")+"."+ratingsL10n.image_ext):ratingsL10n.custom?jQuery("#rating_"+post_id+"_"+i).attr("src",ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_"+i+"_off."+ratingsL10n.image_ext):jQuery("#rating_"+post_id+"_"+i).attr("src",ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_off."+ratingsL10n.image_ext);jQuery("#ratings_"+
post_id+"_text").length&&(jQuery("#ratings_"+post_id+"_text").hide(),jQuery("#ratings_"+post_id+"_text").empty())}}function set_is_being_rated(a){is_being_rated=a}function rate_post_success(a){jQuery("#post-ratings-"+post_id).html(a);ratingsL10n.show_loading&&jQuery("#post-ratings-"+post_id+"-loading").hide();ratingsL10n.show_fading?jQuery("#post-ratings-"+post_id).fadeTo("def",1,function(){set_is_being_rated(!1)}):set_is_being_rated(!1)}
function rate_post(){post_ratings_el=jQuery("#post-ratings-"+post_id);if(is_being_rated)alert(ratingsL10n.text_wait);else{post_ratings_nonce=jQuery(post_ratings_el).data("nonce");if("undefined"==typeof post_ratings_nonce||null==post_ratings_nonce)post_ratings_nonce=jQuery(post_ratings_el).attr("data-nonce");set_is_being_rated(!0);ratingsL10n.show_fading?jQuery(post_ratings_el).fadeTo("def",0,function(){ratingsL10n.show_loading&&jQuery("#post-ratings-"+post_id+"-loading").show();jQuery.ajax({type:"POST",
xhrFields:{withCredentials:!0},dataType:"html",url:ratingsL10n.ajax_url,data:"action=postratings&pid="+post_id+"&rate="+post_rating+"&postratings_"+post_id+"_nonce="+post_ratings_nonce,cache:!1,success:rate_post_success})}):(ratingsL10n.show_loading&&jQuery("#post-ratings-"+post_id+"-loading").show(),jQuery.ajax({type:"POST",xhrFields:{withCredentials:!0},dataType:"html",url:ratingsL10n.ajax_url,data:"action=postratings&pid="+post_id+"&rate="+post_rating+"&postratings_"+post_id+"_nonce="+post_ratings_nonce,
cache:!1,success:rate_post_success}))}};
(function(){
const siteNavigation=document.getElementById('site-navigation');
if(! siteNavigation){
return;
}
const button=siteNavigation.getElementsByTagName('button')[ 0 ];
if('undefined'===typeof button){
return;
}
const menu=siteNavigation.getElementsByTagName('ul')[ 0 ];
if('undefined'===typeof menu){
button.style.display='none';
return;
}
if(! menu.classList.contains('nav-menu')){
menu.classList.add('nav-menu');
}
button.addEventListener('click', function(){
siteNavigation.classList.toggle('toggled');
if(button.getAttribute('aria-expanded')==='true'){
button.setAttribute('aria-expanded', 'false');
}else{
button.setAttribute('aria-expanded', 'true');
}});
document.addEventListener('click', function(event){
const isClickInside=siteNavigation.contains(event.target);
if(! isClickInside){
siteNavigation.classList.remove('toggled');
button.setAttribute('aria-expanded', 'false');
}});
const links=menu.getElementsByTagName('a');
const linksWithChildren=menu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');
for(const link of links){
link.addEventListener('focus', toggleFocus, true);
link.addEventListener('blur', toggleFocus, true);
}
for(const link of linksWithChildren){
link.addEventListener('touchstart', toggleFocus, false);
}
function toggleFocus(){
if(event.type==='focus'||event.type==='blur'){
let self=this;
while(! self.classList.contains('nav-menu')){
if('li'===self.tagName.toLowerCase()){
self.classList.toggle('focus');
}
self=self.parentNode;
}}
if(event.type==='touchstart'){
const menuItem=this.parentNode;
event.preventDefault();
for(const link of menuItem.parentNode.children){
if(menuItem!==link){
link.classList.remove('focus');
}}
menuItem.classList.toggle('focus');
}}
}());
(function(){
var supportsPassive=false;
try {
var opts=Object.defineProperty({}, 'passive', {
get:function(){
supportsPassive=true;
}});
window.addEventListener('testPassive', null, opts);
window.removeEventListener('testPassive', null, opts);
} catch(e){}
function init(){
var input_begin='';
var keydowns={};
var lastKeyup=null;
var lastKeydown=null;
var keypresses=[];
var modifierKeys=[];
var correctionKeys=[];
var lastMouseup=null;
var lastMousedown=null;
var mouseclicks=[];
var mousemoveTimer=null;
var lastMousemoveX=null;
var lastMousemoveY=null;
var mousemoveStart=null;
var mousemoves=[];
var touchmoveCountTimer=null;
var touchmoveCount=0;
var lastTouchEnd=null;
var lastTouchStart=null;
var touchEvents=[];
var scrollCountTimer=null;
var scrollCount=0;
var correctionKeyCodes=[ 'Backspace', 'Delete', 'ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'Home', 'End', 'PageUp', 'PageDown' ];
var modifierKeyCodes=[ 'Shift', 'CapsLock' ];
var forms=document.querySelectorAll('form[method=post]');
for(var i=0; i < forms.length; i++){
var form=forms[i];
var formAction=form.getAttribute('action');
if(formAction){
if(formAction.indexOf('http://')==0||formAction.indexOf('https://')==0){
if(formAction.indexOf('http://' + window.location.hostname + '/')!=0&&formAction.indexOf('https://' + window.location.hostname + '/')!=0){
continue;
}}
}
form.addEventListener('submit', function (){
var ak_bkp=prepare_timestamp_array_for_request(keypresses);
var ak_bmc=prepare_timestamp_array_for_request(mouseclicks);
var ak_bte=prepare_timestamp_array_for_request(touchEvents);
var ak_bmm=prepare_timestamp_array_for_request(mousemoves);
var input_fields={
'ak_bib': input_begin,
'ak_bfs': Date.now(),
'ak_bkpc': keypresses.length,
'ak_bkp': ak_bkp,
'ak_bmc': ak_bmc,
'ak_bmcc': mouseclicks.length,
'ak_bmk': modifierKeys.join(';'),
'ak_bck': correctionKeys.join(';'),
'ak_bmmc': mousemoves.length,
'ak_btmc': touchmoveCount,
'ak_bsc': scrollCount,
'ak_bte': ak_bte,
'ak_btec':touchEvents.length,
'ak_bmm':ak_bmm
};
for(var field_name in input_fields){
var field=document.createElement('input');
field.setAttribute('type', 'hidden');
field.setAttribute('name', field_name);
field.setAttribute('value', input_fields[ field_name ]);
this.appendChild(field);
}}, supportsPassive ? { passive: true }:false);
form.addEventListener('keydown', function(e){
if(e.key in keydowns){
return;
}
var keydownTime=(new Date()).getTime();
keydowns[ e.key ]=[ keydownTime ];
if(! input_begin){
input_begin=keydownTime;
}
var lastKeyEvent=Math.max(lastKeydown, lastKeyup);
if(lastKeyEvent){
keydowns[ e.key ].push(keydownTime - lastKeyEvent);
}
lastKeydown=keydownTime;
}, supportsPassive ? { passive: true }:false);
form.addEventListener('keyup', function(e){
if(!(e.key in keydowns)){
return;
}
var keyupTime=(new Date()).getTime();
if('TEXTAREA'===e.target.nodeName||'INPUT'===e.target.nodeName){
if(-1!==modifierKeyCodes.indexOf(e.key)){
modifierKeys.push(keypresses.length - 1);
}else if(-1!==correctionKeyCodes.indexOf(e.key)){
correctionKeys.push(keypresses.length - 1);
}else{
var keydownTime=keydowns[ e.key ][0];
var keypress=[];
keypress.push(keyupTime - keydownTime);
if(keydowns[ e.key ].length > 1){
keypress.push(keydowns[ e.key ][1]);
}
keypresses.push(keypress);
}}
delete keydowns[ e.key ];
lastKeyup=keyupTime;
}, supportsPassive ? { passive: true }:false);
form.addEventListener("focusin", function(e){
lastKeydown=null;
lastKeyup=null;
keydowns={};}, supportsPassive ? { passive: true }:false);
form.addEventListener("focusout", function(e){
lastKeydown=null;
lastKeyup=null;
keydowns={};}, supportsPassive ? { passive: true }:false);
}
document.addEventListener('mousedown', function(e){
lastMousedown=(new Date()).getTime();
}, supportsPassive ? { passive: true }:false);
document.addEventListener('mouseup', function(e){
if(! lastMousedown){
return;
}
var now=(new Date()).getTime();
var mouseclick=[];
mouseclick.push(now - lastMousedown);
if(lastMouseup){
mouseclick.push(lastMousedown - lastMouseup);
}
mouseclicks.push(mouseclick);
lastMouseup=now;
lastKeydown=null;
lastKeyup=null;
keydowns={};}, supportsPassive ? { passive: true }:false);
document.addEventListener('mousemove', function(e){
if(mousemoveTimer){
clearTimeout(mousemoveTimer);
mousemoveTimer=null;
}else{
mousemoveStart=(new Date()).getTime();
lastMousemoveX=e.offsetX;
lastMousemoveY=e.offsetY;
}
mousemoveTimer=setTimeout(function(theEvent, originalMousemoveStart){
var now=(new Date()).getTime() - 500;
var mousemove=[];
mousemove.push(now - originalMousemoveStart);
mousemove.push(Math.round(Math.sqrt(Math.pow(theEvent.offsetX - lastMousemoveX, 2) +
Math.pow(theEvent.offsetY - lastMousemoveY, 2)
)
)
);
if(mousemove[1] > 0){
mousemoves.push(mousemove);
}
mousemoveStart=null;
mousemoveTimer=null;
}, 500, e, mousemoveStart);
}, supportsPassive ? { passive: true }:false);
document.addEventListener('touchmove', function(e){
if(touchmoveCountTimer){
clearTimeout(touchmoveCountTimer);
}
touchmoveCountTimer=setTimeout(function (){
touchmoveCount++;
}, 500);
}, supportsPassive ? { passive: true }:false);
document.addEventListener('touchstart', function(e){
lastTouchStart=(new Date()).getTime();
}, supportsPassive ? { passive: true }:false);
document.addEventListener('touchend', function(e){
if(! lastTouchStart){
return;
}
var now=(new Date()).getTime();
var touchEvent=[];
touchEvent.push(now - lastTouchStart);
if(lastTouchEnd){
touchEvent.push(lastTouchStart - lastTouchEnd);
}
touchEvents.push(touchEvent);
lastTouchEnd=now;
lastKeydown=null;
lastKeyup=null;
keydowns={};}, supportsPassive ? { passive: true }:false);
document.addEventListener('scroll', function(e){
if(scrollCountTimer){
clearTimeout(scrollCountTimer);
}
scrollCountTimer=setTimeout(function (){
scrollCount++;
}, 500);
}, supportsPassive ? { passive: true }:false);
}
function prepare_timestamp_array_for_request(a, limit){
if(! limit){
limit=100;
}
var rv='';
if(a.length > 0){
var random_starting_point=Math.max(0, Math.floor(Math.random() * a.length - limit));
for(var i=0; i < limit&&i < a.length; i++){
rv +=a[ random_starting_point + i ][0];
if(a[ random_starting_point + i ].length >=2){
rv +="," + a[ random_starting_point + i ][1];
}
rv +=";";
}}
return rv;
}
if(document.readyState!=='loading'){
init();
}else{
document.addEventListener('DOMContentLoaded', init);
}})();
$(function(){
document.getElementById('burger').onclick=function(){
const menu=document.getElementById('mobile-menu')
menu.style.display='block'
document.body.style.overflow='hidden';
}
document.getElementById('close').onclick=function(){
const menu=document.getElementById('mobile-menu')
menu.style.display='none'
document.body.style.overflow='visible';
}
const btnformodal=document.getElementsByClassName("btn-for-modal")
for(let i=0; i < btnformodal.length;i++){
btnformodal[i].addEventListener("click", ()=> {
document.getElementById('modal-window').style.display="block";
document.body.style.overflow='hidden';
})
}
document.getElementById("modal-close").addEventListener("click", ()=> {
document.getElementById('modal-window').style.display="none";
document.body.style.overflow='auto';
})
})
$(window).scroll(function(){300<$(this).scrollTop()?$(".scrollup").fadeIn():$(".scrollup").fadeOut()}),$(".scrollup").click(function(){return $("html, body").animate({scrollTop:0},600),!1});
$(".WhenWeUseful__filterItem").click(function(){
$([document.documentElement, document.body]).animate({
scrollTop: $(".WhenWeUseful").offset().top
}, 500);
});
$(function (){
const buttons=document.getElementsByClassName('WhenWeUseful__filterItem');
const texts=document.getElementsByClassName('WhenWeUseful__content-description-items');
const title=document.getElementsByClassName("home_when_we_useful_items_title")[0];
const iconPlace=document.getElementsByClassName("home_when_we_useful_icon")[0];
const icons=document.querySelectorAll(".home_when_we_useful_icon img");
console.log(icons)
for (let i=1; i < texts.length; i++){
buttons[i].classList.remove('active');
texts[i].style.display="none";
icons[i]?icons[i].style.display="none":""
}
title.innerHTML=buttons[0].innerHTML;
function WhenWeUsefulController(){
for (let i=0; i < buttons.length; i++){
buttons[i].addEventListener('click', function (){
hideAll();
buttons[i].classList.add('active');
texts[i].style.display="block";
title.innerHTML=buttons[i].innerHTML
icons[i].style.display="block";
})
}}
WhenWeUsefulController();
function hideAll(){
for (let i=0; i < texts.length; i++){
buttons[i].classList.remove('active');
texts[i].style.display="none";
icons[i]?icons[i].style.display="none":""
}}
$('.ourClients__content').slick({
rows: 4,
slidesPerRow: 4,
arrows: false,
dots: true,
customPaging: function (){
return '<div class="custom-dots"/>'
},
responsive: [{
breakpoint: 1200,
settings: {
rows: 4,
slidesPerRow: 3,
}},
{
breakpoint: 769,
settings: {
rows: 6,
slidesPerRow: 2,
}},
]
});
$('.reviews__content').slick({
slidesToShow: 3,
slidesToScroll: 3,
arrows: false,
infinite: true,
dots: true,
customPaging: function (slider, i){
return '<div class="custom-dots"/>';
},
responsive: [{
breakpoint: 1200,
settings: {
slidesToShow: 2,
slidesToScroll: 2,
}},
{
breakpoint: 700,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
}},
]
});
$('.diagrams__content').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
infinite: false,
dots: true,
customPaging: function (slider, i){
return '<div class="custom-dots light"/>';
},
responsive: [
{},
]
});
})
function legendsHandler(){
const width=window.innerWidth
const ul=document.querySelectorAll('.legends ul');
if(width < 1250){
for (let i=0; i < ul.length; i++){
ul[i].classList.add("show-only-top")
}}else{
for (let i=0; i < ul.length; i++){
ul[i].classList.remove("show-only-top")
}}
}
const getOrCreateLegendList=(chart, id)=> {
const legendContainer=document.getElementById(id);
let listContainer=legendContainer.querySelector('ul');
if(!listContainer){
listContainer=document.createElement('ul');
listContainer.style.display='flex';
listContainer.style.flexDirection='column';
listContainer.style.maxWidth='300px';
legendContainer.appendChild(listContainer);
}
return listContainer;
};
function generateHtmlLegendPlugin(id){
const htmlLegendPlugin={
id: 'htmlLegend',
afterUpdate(chart, args, options){
const ul=getOrCreateLegendList(chart, id);
while (ul.firstChild){
ul.firstChild.remove();
}
const items=chart.options.plugins.legend.labels.generateLabels(chart);
items.forEach(item=> {
const li=document.createElement('li');
li.style.display='flex';
li.style.flexDirection='row';
li.style.margin='15px 0';
const boxSpan=document.createElement('span');
boxSpan.style.background=item.fillStyle;
boxSpan.style.borderColor=item.strokeStyle;
boxSpan.style.borderWidth=item.lineWidth + 'px';
boxSpan.style.display='inline-block';
boxSpan.style.borderRadius='100%';
boxSpan.style.width='20px';
boxSpan.style.minWidth='20px';
boxSpan.style.height='20px';
boxSpan.style.marginRight='10px';
const wrapper=document.createElement('div');
wrapper.style.display="flex"
wrapper.style.flexDirection="column"
const textContainer=document.createElement('div');
textContainer.style.color="#212121";
textContainer.style.fontWeight='bold'
const textPercent=document.createElement('div');
textPercent.style.color="#263238";
textPercent.style.fontSize="14px";
textPercent.style.fontWeight='500'
textPercent.style.marginTop='10px'
const text=document.createTextNode(item.text);
const percent=document.createTextNode(chart.data.datasets[0].data[item.index] + "%");
textContainer.appendChild(text);
textPercent.appendChild(percent);
wrapper.appendChild(textContainer)
wrapper.appendChild(textPercent)
li.appendChild(boxSpan);
li.appendChild(wrapper);
ul.appendChild(li);
});
}};
return htmlLegendPlugin
}
function makePie(id_canvas, id_legends, titles, percents, colors){
const canvasContainer=document.getElementById(id_canvas);
const legendContainer=document.getElementById(id_legends);
const config={
type: 'pie',
data: {
labels: titles,
datasets: [{
borderWidth: 0,
backgroundColor: colors,
data: percents
}]
},
options: {
plugins: {
htmlLegend: {
containerID: legendContainer,
},
legend: {
display: false,
}}
},
plugins: [generateHtmlLegendPlugin(id_legends)],
};
const myPie=new Chart(canvasContainer, config);
}
$(function (){
const diagrams=document.getElementsByClassName('diagrams__contentItem');
for (let i=0; i < diagrams.length; i++){
const id_canvas='progress-chart-' + i;
const id_legends='diagram-' + i;
const titles=JSON.parse(diagrams[i].dataset.titles);
const percents=JSON.parse(diagrams[i].dataset.percents);
const colors=JSON.parse(diagrams[i].dataset.colors);
makePie(id_canvas, id_legends, titles, percents, colors)
}
legendsHandler()
})
window.addEventListener('resize', function (event){
legendsHandler();
})
const maximumLabelsOnMobile=3;
$(function (){
const diagrams=document.querySelectorAll('.diagrams__contentItem');
const btn=document.getElementById('diagram_btn');
const showText=btn.dataset.show;
const hideText=btn.dataset.hide;
for (const diagram of diagrams){
const btns=diagram.getElementsByClassName('btn-show-more')
for (let btn of btns){
btn.innerHTML=showText
const ul=diagram.querySelector('ul');
if(ul.children.length <=maximumLabelsOnMobile){
btn.style.display="none";
}else{
btn.addEventListener('click', ()=> {
if(ul.classList.contains("show-only-top")){
ul.classList.remove("show-only-top")
btn.innerHTML=hideText
}else{
ul.classList.add("show-only-top")
btn.innerHTML=showText
}})
}}
}
window.addEventListener('resize', (event)=>{
if(event.target.innerWidth>1250){
const btns=document.getElementsByClassName('btn-show-more')
for(let i=0; i < btns.length; i++){
btns[i].innerHTML=showText
}}
})
});