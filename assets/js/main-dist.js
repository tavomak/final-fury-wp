$((function(){if(sbjs.init(),"Apple Computer, Inc."===navigator.vendor?$(".cd-loader").remove():$(window).on("load",(function(){$(".cd-loader").fadeOut("slow",(function(){$(this).remove()}))})),$(window).scroll((function(){$(this).scrollTop()>=80?$(".main-menu").addClass("active"):$(".main-menu").removeClass("active")})),$(".mobile-primary-menu").on("click",(function(){$(this).toggleClass("is-active"),$("#navbarNavDropdown").toggleClass("show"),$(".header").toggleClass("open")})),$(".contactModalBtn").on("click",(function(e){e.preventDefault(),$("#contact-form-modal").modal("show")})),$(".videoModalBtn").on("click",(function(e){e.preventDefault(),$("#video-modal").modal("show")})),$("#video-modal").on("hidden.bs.modal",(function(e){$(".youtubeVideo").each((function(){this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}',"*")}))})),$(".parallelogram").on("click",(function(e){e.preventDefault(),$(".parallelogram").removeClass("parallelogram--active"),$(".parallelogram--text").addClass("parallelogram--text-close"),$(this).find(".parallelogram--text").removeClass("parallelogram--text-close"),$(this).addClass("parallelogram--active")})),data){const e=data.move_list,o=data.base_url,t=({listOfItems:e})=>{const t=$(".move-list--icons"),a=$(".move-list--video"),n=$(".move-list--video-iframe");t.empty(),$.each(e,(function(e,i){let l,s;i.video_id?(l="https://www.youtube.com/embed/"+i.video_id+"?feature=oembed&enablejsapi=1&enablejsapi=1&autoplay=1&mute=1",n.attr({src:l})):l=i?.video_file,i.active?(s=i.move_icon_on||`${o}icon-${i.icon_type}-active.png`,a.attr({poster:i.image,src:l}),$(".move-list--text-title").text(i.name),$(".move-list--text-description").text(i.description)):s=i.move_icon_off||`${o}icon-${i.icon_type}.png`,t.append(`\n              <li class="px-2" style="width: 20%">\n                <a href="#" class="move-list--icon-link" data-name="${i.name+"-"+e}" data-type="${i.video_source}">\n                  <img class="w-100" src="${s}">\n                </a>\n              </li>\n            `)}))};t({listOfItems:e}),$(".move-list--icons").on("click",".move-list--icon-link",(function(o){o.preventDefault();const a="youTube"===$(this).data("type"),n=$(".move-list--video"),i=$(".move-list--figure");n.fadeOut("fast",(()=>{const o=e.map(((e,o)=>e.name+"-"+o===$(this).data("name")?{...e,active:!0}:{...e,active:!1}));$(".move-list--icons").empty(),t({listOfItems:o})})),a?(i.removeClass("d-none"),n.addClass("d-none"),i.fadeIn()):(n.removeClass("d-none"),i.addClass("d-none"),n.fadeIn())}))}$(".voice-button").on("click",(function(e){e.preventDefault(),$(".voice-audio").trigger("play")})),$(".theme-button").on("click",(function(e){e.preventDefault(),$(".theme-audio").trigger("play")}));var e=sbjs.get.current.mdm,o=sbjs.get.current.src;$("#fuenteSbj").val(o),$("#medioSbj").val(e),$(".wpcf7").on("wpcf7mailsent",(function(e){$("#contact-form-modal").modal("hide"),Toastify({text:"Success",duration:3e3,close:!0,gravity:"top",position:"right",stopOnFocus:!0,style:{background:"linear-gradient(to right, #00b09b, #96c93d)"},onClick:function(){}}).showToast()})),$(".wpcf7").on("wpcf7mailfailed",(function(e){console.log("Failed"),Toastify({text:"Success",duration:3e3,close:!0,gravity:"top",position:"right",stopOnFocus:!0,style:{background:"linear-gradient(to right, #ff5f6d, #ffc371)"},onClick:function(){}}).showToast()})),$(".wpcf7").on("wpcf7invalid",(function(){console.log("invalid")})),$(".wpcf7").on("wpcf7submit",(function(){console.log("wpcf7submit")}))}));
//# sourceMappingURL=main-dist.js.map