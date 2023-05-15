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
const correct_text=document.getElementById('helper').dataset.correct
const incorrect_text=document.getElementById('helper').dataset.incorrect
const questionsOne=document.getElementsByClassName("question-one")
for (const question of questionsOne){
const answer=question.dataset.answer;
const btn=question.getElementsByClassName('checkAnswer')[0]
btn.addEventListener('click', ()=> {
const placeForAnswer=question.getElementsByClassName('placeForAnswer')[0];
const userAnswer=question.querySelector('.question__choices input:checked').value;
const inputs=question.querySelectorAll('input')
for (const input of inputs){
input.disabled=true;
}
const block=document.createElement('div');
if(userAnswer===answer){
block.classList.add('answer-correct')
block.innerText=correct_text
}else{
block.classList.add('answer-incorrect')
block.innerText=incorrect_text
}
placeForAnswer.appendChild(block)
btn.style.display="none"
})
}
const questions=document.getElementsByClassName("question-several")
for (const question of questions){
const answer=question.dataset.answer;
const parsedAnswer=JSON.parse(answer);
const btn=question.getElementsByClassName('checkAnswer')[0]
btn.addEventListener('click', ()=> {
const placeForAnswer=question.getElementsByClassName('placeForAnswer')[0];
const userAnswer=question.querySelectorAll('input:checked');
let result=true;
if(userAnswer.length===parsedAnswer.length){
for (let i=0; i < userAnswer.length; i++){
if(parsedAnswer[i]!=userAnswer[i].value){
result=false;
break;
}}
}else{
result=false;
}
const inputs=question.querySelectorAll('input')
for (const input of inputs){
input.disabled=true;
}
const block=document.createElement('div');
if(result){
block.classList.add('answer-correct')
block.innerText=correct_text
}else{
block.classList.add('answer-incorrect')
block.innerText=incorrect_text
}
placeForAnswer.appendChild(block)
btn.style.display="none"
})
}
const accordions=document.getElementsByClassName('accordion');
for (const accordion of accordions){
const items=accordion.getElementsByClassName('accordion__content')[0].children;
const close=()=> {
for (const item of accordion.getElementsByClassName('accordion__itemContent')){
item.style.display="none"
}
for (const item of accordion.getElementsByClassName('accordion__arrow')){
item.style.transform="rotate(0deg)";
}}
for (const item of items){
item.addEventListener('click', ()=> {
const itemContent=item.getElementsByClassName('accordion__itemContent')[0];
const itemArrow=item.getElementsByClassName('accordion__arrow')[0];
if(itemContent.style.display==='block'){
close();
}else{
close()
itemContent.style.display="block";
itemArrow.style.transform="rotate(180deg)";
}})
}}
$(document).ready(function (){
$('.slider').slick({
slidesToShow: 1,
arrows: false,
dots: true,
customPaging: function (){
return '<div class="custom-dots light"/>'
},
});
});