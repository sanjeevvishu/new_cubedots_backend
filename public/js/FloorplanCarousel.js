"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[46],{5528:(t,a,e)=>{e.d(a,{Z:()=>i});var s=e(3645),o=e.n(s)()((function(t){return t[1]}));o.push([t.id,".carousel-control-next-icon[data-v-e1c8e660],.carousel-control-prev-icon[data-v-e1c8e660]{background-color:#444!important}",""]);const i=o},9151:(t,a,e)=>{e.r(a),e.d(a,{default:()=>r});var s=e(7244);const o={name:"FloorplanCarousel",props:{images:{type:Array,required:!0},title:{type:String,default:"Opps!"}},data:function(){return{showModal:!1,localTitle:null,localImages:[],activeImage:0,progressLoader:!0}},watch:{images:function(t){this.localImages=t},title:function(t){this.localTitle=t}},computed:{currentImage:function(){return this.images[this.activeImage].big}},beforeMount:function(){},beforeUpdate:function(){var t=this;setTimeout((function(){t.$nextTick().then((function(){t.progressLoader=!1}))}),2e3)},mounted:function(){},methods:{loadGallery:function(){},show:function(){var t=this;this.showModal=!0,setTimeout((function(){new s.Modal(document.getElementById("galleryModal"),{keyboard:!1,backdrop:"static"}).show()}),100),this.$nextTick().then((function(){t.progressLoader=!1}))},hide:function(){this.showModal=!1},activateImage:function(t){this.activeImage=t}}};var i=e(3379),l=e.n(i),n=e(5528),c={insert:"head",singleton:!1};l()(n.Z,c);n.Z.locals;const r=(0,e(1900).Z)(o,(function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("section",[t.showModal?e("div",{staticClass:"modal fade",attrs:{id:"galleryModal",tabindex:"-1",role:"dialog","aria-hidden":"true","data-backdrop":"static","data-keyboard":"false"}},[e("div",{staticClass:"modal-dialog modal-xl"},[e("div",{staticClass:"modal-content"},[e("div",{staticClass:"modal-header"},[e("h5",{staticClass:"modal-title",attrs:{id:"exampleModalLabel"}},[t._v("\n            "+t._s(t.localTitle)+" Gallery\n          ")]),t._v(" "),e("button",{staticClass:"btn-close",attrs:{type:"button","data-bs-dismiss":"modal","aria-label":"Close"},on:{click:t.hide}})]),t._v(" "),e("div",{staticClass:"modal-body"},[e("div",{staticClass:"carousel slide",attrs:{id:"carouselExampleIndicators","data-bs-ride":"carousel"}},[e("div",{staticClass:"carousel-indicators"},t._l(t.localImages,(function(a,s){return e("button",{key:a.id,class:[t.activeImage==s?"active":""],attrs:{type:"button","data-bs-target":"#carouselExampleIndicators","data-bs-slide-to":s},on:{click:function(a){return t.activateImage(s)}}})})),0),t._v(" "),e("div",{staticClass:"carousel-inner"},t._l(t.localImages,(function(a,s){return e("div",{key:a.id,class:["carousel-item",t.activeImage==s?"active":""],on:{click:function(a){return t.activateImage(s)}}},[e("img",{staticClass:"d-block w-100",attrs:{src:t.$getPublicPath(a.media_s3_base_path+a.local_path),alt:"..."}})])})),0),t._v(" "),t._m(0),t._v(" "),t._m(1)]),t._v(" "),t.progressLoader?e("div",{staticClass:"text-center"},[e("p",[t._v("Loading...")])]):t._e()])])])]):t._e()])}),[function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("button",{staticClass:"carousel-control-prev",attrs:{type:"button","data-bs-target":"#carouselExampleIndicators","data-bs-slide":"prev"}},[e("span",{staticClass:"carousel-control-prev-icon",attrs:{"aria-hidden":"true"}}),t._v(" "),e("span",{staticClass:"visually-hidden"},[t._v("Previous")])])},function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("button",{staticClass:"carousel-control-next",attrs:{type:"button","data-bs-target":"#carouselExampleIndicators","data-bs-slide":"next"}},[e("span",{staticClass:"carousel-control-next-icon",attrs:{"aria-hidden":"true"}}),t._v(" "),e("span",{staticClass:"visually-hidden"},[t._v("Next")])])}],!1,null,"e1c8e660",null).exports}}]);