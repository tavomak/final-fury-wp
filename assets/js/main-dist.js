$((function(){if(sbjs.init(),"Apple Computer, Inc."===navigator.vendor?$(".cd-loader").remove():$(window).on("load",(function(){$(".cd-loader").fadeOut("slow",(function(){$(this).remove()}))})),$(window).scroll((function(){$(this).scrollTop()>=80?$(".main-menu").addClass("active"):$(".main-menu").removeClass("active")})),$(".mobile-primary-menu").on("click",(function(){$(this).toggleClass("is-active"),$("#navbarNavDropdown").toggleClass("show"),$(".header").toggleClass("open")})),$(".contactModalBtn").on("click",(function(o){o.preventDefault(),$("#contact-form-modal").modal("show")})),$(".videoModalBtn").on("click",(function(o){o.preventDefault(),$("#video-modal").modal("show")})),$("#video-modal").on("hidden.bs.modal",(function(o){$(".youtubeVideo").each((function(){this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}',"*")}))})),$(".parallelogram").on("click",(function(o){o.preventDefault(),$(".parallelogram").removeClass("parallelogram--active"),$(".parallelogram--text").addClass("parallelogram--text-close"),$(this).find(".parallelogram--text").removeClass("parallelogram--text-close"),$(this).addClass("parallelogram--active")})),data){const o=data.move_list,e=data.base_url;console.log({moveList:o});const t=({listOfItems:o})=>{const t=$(".move-list--icons"),a=$(".move-list--video"),n=$(".move-list--video-iframe");t.empty(),$.each(o,(function(o,i){let s,l;i.video_id?(s="https://www.youtube.com/embed/"+i.video_id+"?feature=oembed&enablejsapi=1&enablejsapi=1&autoplay=1&mute=1",n.attr({src:s})):s=i?.video_file,i.active?(l=i.move_icon_on||`${e}icon-${i.icon_type}-active.png`,a.attr({poster:i.image,src:s}),$(".move-list--text-title").text(i.name),$(".move-list--text-description").text(i.description)):l=i.move_icon_off||`${e}icon-${i.icon_type}.png`,t.append(`\n              <li class="px-2" style="width: 20%">\n                <a href="#" class="move-list--icon-link" data-name="${i.name+"-"+o}" data-type="${i.video_source}">\n                  <img class="w-100" src="${l}">\n                </a>\n              </li>\n            `)}))};t({listOfItems:o}),$(".move-list--icons").on("click",".move-list--icon-link",(function(e){e.preventDefault();const a="youTube"===$(this).data("type"),n=$(".move-list--video"),i=$(".move-list--figure");n.fadeOut("fast",(()=>{const e=o.map(((o,e)=>o.name+"-"+e===$(this).data("name")?{...o,active:!0}:{...o,active:!1}));$(".move-list--icons").empty(),t({listOfItems:e})})),a?(i.removeClass("d-none"),n.addClass("d-none"),i.fadeIn()):(n.removeClass("d-none"),i.addClass("d-none"),n.fadeIn())}))}var o=sbjs.get.current.mdm,e=sbjs.get.current.src;$("#fuenteSbj").val(e),$("#medioSbj").val(o),$(".wpcf7").on("wpcf7:mailsent",(function(o){$("#contacto-form-modal").modal("hide"),Toastify({text:"Success",duration:3e3,close:!0,gravity:"top",position:"right",stopOnFocus:!0,style:{background:"linear-gradient(to right, #00b09b, #96c93d)"},onClick:function(){}}).showToast()})),$(".wpcf7").on("wpcf7mailfailed",(function(o){console.log("Failed"),Toastify({text:"Success",duration:3e3,close:!0,gravity:"top",position:"right",stopOnFocus:!0,style:{background:"linear-gradient(to right, #ff5f6d, #ffc371)"},onClick:function(){}}).showToast()})),$(".wpcf7").on("wpcf7invalid",(function(){console.log("invalid")})),$(".wpcf7").on("wpcf7submit",(function(){console.log("wpcf7submit")}))}));
//# sourceMappingURL=main-dist.js.map