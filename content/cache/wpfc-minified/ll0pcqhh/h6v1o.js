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