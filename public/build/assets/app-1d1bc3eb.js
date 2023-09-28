function Te(e,t){return function(){return e.apply(t,arguments)}}const{toString:$e}=Object.prototype,{getPrototypeOf:re}=Object,v=(e=>t=>{const n=$e.call(t);return e[n]||(e[n]=n.slice(8,-1).toLowerCase())})(Object.create(null)),O=e=>(e=e.toLowerCase(),t=>v(t)===e),z=e=>t=>typeof t===e,{isArray:F}=Array,_=z("undefined");function Ve(e){return e!==null&&!_(e)&&e.constructor!==null&&!_(e.constructor)&&b(e.constructor.isBuffer)&&e.constructor.isBuffer(e)}const Ne=O("ArrayBuffer");function We(e){let t;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?t=ArrayBuffer.isView(e):t=e&&e.buffer&&Ne(e.buffer),t}const Ke=z("string"),b=z("function"),Pe=z("number"),J=e=>e!==null&&typeof e=="object",Ge=e=>e===!0||e===!1,j=e=>{if(v(e)!=="object")return!1;const t=re(e);return(t===null||t===Object.prototype||Object.getPrototypeOf(t)===null)&&!(Symbol.toStringTag in e)&&!(Symbol.iterator in e)},Xe=O("Date"),Qe=O("File"),Ye=O("Blob"),Ze=O("FileList"),et=e=>J(e)&&b(e.pipe),tt=e=>{let t;return e&&(typeof FormData=="function"&&e instanceof FormData||b(e.append)&&((t=v(e))==="formdata"||t==="object"&&b(e.toString)&&e.toString()==="[object FormData]"))},nt=O("URLSearchParams"),rt=e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function B(e,t,{allOwnKeys:n=!1}={}){if(e===null||typeof e>"u")return;let r,s;if(typeof e!="object"&&(e=[e]),F(e))for(r=0,s=e.length;r<s;r++)t.call(null,e[r],r,e);else{const i=n?Object.getOwnPropertyNames(e):Object.keys(e),o=i.length;let u;for(r=0;r<o;r++)u=i[r],t.call(null,e[u],u,e)}}function xe(e,t){t=t.toLowerCase();const n=Object.keys(e);let r=n.length,s;for(;r-- >0;)if(s=n[r],t===s.toLowerCase())return s;return null}const Ce=(()=>typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global)(),Fe=e=>!_(e)&&e!==Ce;function Z(){const{caseless:e}=Fe(this)&&this||{},t={},n=(r,s)=>{const i=e&&xe(t,s)||s;j(t[i])&&j(r)?t[i]=Z(t[i],r):j(r)?t[i]=Z({},r):F(r)?t[i]=r.slice():t[i]=r};for(let r=0,s=arguments.length;r<s;r++)arguments[r]&&B(arguments[r],n);return t}const st=(e,t,n,{allOwnKeys:r}={})=>(B(t,(s,i)=>{n&&b(s)?e[i]=Te(s,n):e[i]=s},{allOwnKeys:r}),e),ot=e=>(e.charCodeAt(0)===65279&&(e=e.slice(1)),e),it=(e,t,n,r)=>{e.prototype=Object.create(t.prototype,r),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),n&&Object.assign(e.prototype,n)},at=(e,t,n,r)=>{let s,i,o;const u={};if(t=t||{},e==null)return t;do{for(s=Object.getOwnPropertyNames(e),i=s.length;i-- >0;)o=s[i],(!r||r(o,e,t))&&!u[o]&&(t[o]=e[o],u[o]=!0);e=n!==!1&&re(e)}while(e&&(!n||n(e,t))&&e!==Object.prototype);return t},ct=(e,t,n)=>{e=String(e),(n===void 0||n>e.length)&&(n=e.length),n-=t.length;const r=e.indexOf(t,n);return r!==-1&&r===n},ut=e=>{if(!e)return null;if(F(e))return e;let t=e.length;if(!Pe(t))return null;const n=new Array(t);for(;t-- >0;)n[t]=e[t];return n},lt=(e=>t=>e&&t instanceof e)(typeof Uint8Array<"u"&&re(Uint8Array)),ft=(e,t)=>{const r=(e&&e[Symbol.iterator]).call(e);let s;for(;(s=r.next())&&!s.done;){const i=s.value;t.call(e,i[0],i[1])}},dt=(e,t)=>{let n;const r=[];for(;(n=e.exec(t))!==null;)r.push(n);return r},pt=O("HTMLFormElement"),ht=e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(n,r,s){return r.toUpperCase()+s}),ue=(({hasOwnProperty:e})=>(t,n)=>e.call(t,n))(Object.prototype),mt=O("RegExp"),De=(e,t)=>{const n=Object.getOwnPropertyDescriptors(e),r={};B(n,(s,i)=>{t(s,i,e)!==!1&&(r[i]=s)}),Object.defineProperties(e,r)},yt=e=>{De(e,(t,n)=>{if(b(e)&&["arguments","caller","callee"].indexOf(n)!==-1)return!1;const r=e[n];if(b(r)){if(t.enumerable=!1,"writable"in t){t.writable=!1;return}t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+n+"'")})}})},Et=(e,t)=>{const n={},r=s=>{s.forEach(i=>{n[i]=!0})};return F(e)?r(e):r(String(e).split(t)),n},wt=()=>{},bt=(e,t)=>(e=+e,Number.isFinite(e)?e:t),G="abcdefghijklmnopqrstuvwxyz",le="0123456789",Le={DIGIT:le,ALPHA:G,ALPHA_DIGIT:G+G.toUpperCase()+le},gt=(e=16,t=Le.ALPHA_DIGIT)=>{let n="";const{length:r}=t;for(;e--;)n+=t[Math.random()*r|0];return n};function St(e){return!!(e&&b(e.append)&&e[Symbol.toStringTag]==="FormData"&&e[Symbol.iterator])}const Ot=e=>{const t=new Array(10),n=(r,s)=>{if(J(r)){if(t.indexOf(r)>=0)return;if(!("toJSON"in r)){t[s]=r;const i=F(r)?[]:{};return B(r,(o,u)=>{const d=n(o,s+1);!_(d)&&(i[u]=d)}),t[s]=void 0,i}}return r};return n(e,0)},Rt=O("AsyncFunction"),At=e=>e&&(J(e)||b(e))&&b(e.then)&&b(e.catch),a={isArray:F,isArrayBuffer:Ne,isBuffer:Ve,isFormData:tt,isArrayBufferView:We,isString:Ke,isNumber:Pe,isBoolean:Ge,isObject:J,isPlainObject:j,isUndefined:_,isDate:Xe,isFile:Qe,isBlob:Ye,isRegExp:mt,isFunction:b,isStream:et,isURLSearchParams:nt,isTypedArray:lt,isFileList:Ze,forEach:B,merge:Z,extend:st,trim:rt,stripBOM:ot,inherits:it,toFlatObject:at,kindOf:v,kindOfTest:O,endsWith:ct,toArray:ut,forEachEntry:ft,matchAll:dt,isHTMLForm:pt,hasOwnProperty:ue,hasOwnProp:ue,reduceDescriptors:De,freezeMethods:yt,toObjectSet:Et,toCamelCase:ht,noop:wt,toFiniteNumber:bt,findKey:xe,global:Ce,isContextDefined:Fe,ALPHABET:Le,generateString:gt,isSpecCompliantForm:St,toJSONObject:Ot,isAsyncFn:Rt,isThenable:At};function m(e,t,n,r,s){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=new Error().stack,this.message=e,this.name="AxiosError",t&&(this.code=t),n&&(this.config=n),r&&(this.request=r),s&&(this.response=s)}a.inherits(m,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:a.toJSONObject(this.config),code:this.code,status:this.response&&this.response.status?this.response.status:null}}});const _e=m.prototype,Be={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach(e=>{Be[e]={value:e}});Object.defineProperties(m,Be);Object.defineProperty(_e,"isAxiosError",{value:!0});m.from=(e,t,n,r,s,i)=>{const o=Object.create(_e);return a.toFlatObject(e,o,function(d){return d!==Error.prototype},u=>u!=="isAxiosError"),m.call(o,e.message,t,n,r,s),o.cause=e,o.name=e.name,i&&Object.assign(o,i),o};const Tt=null;function ee(e){return a.isPlainObject(e)||a.isArray(e)}function Ue(e){return a.endsWith(e,"[]")?e.slice(0,-2):e}function fe(e,t,n){return e?e.concat(t).map(function(s,i){return s=Ue(s),!n&&i?"["+s+"]":s}).join(n?".":""):t}function Nt(e){return a.isArray(e)&&!e.some(ee)}const Pt=a.toFlatObject(a,{},null,function(t){return/^is[A-Z]/.test(t)});function $(e,t,n){if(!a.isObject(e))throw new TypeError("target must be an object");t=t||new FormData,n=a.toFlatObject(n,{metaTokens:!0,dots:!1,indexes:!1},!1,function(h,R){return!a.isUndefined(R[h])});const r=n.metaTokens,s=n.visitor||l,i=n.dots,o=n.indexes,d=(n.Blob||typeof Blob<"u"&&Blob)&&a.isSpecCompliantForm(t);if(!a.isFunction(s))throw new TypeError("visitor must be a function");function c(f){if(f===null)return"";if(a.isDate(f))return f.toISOString();if(!d&&a.isBlob(f))throw new m("Blob is not supported. Use a Buffer instead.");return a.isArrayBuffer(f)||a.isTypedArray(f)?d&&typeof Blob=="function"?new Blob([f]):Buffer.from(f):f}function l(f,h,R){let g=f;if(f&&!R&&typeof f=="object"){if(a.endsWith(h,"{}"))h=r?h:h.slice(0,-2),f=JSON.stringify(f);else if(a.isArray(f)&&Nt(f)||(a.isFileList(f)||a.endsWith(h,"[]"))&&(g=a.toArray(f)))return h=Ue(h),g.forEach(function(k,Je){!(a.isUndefined(k)||k===null)&&t.append(o===!0?fe([h],Je,i):o===null?h:h+"[]",c(k))}),!1}return ee(f)?!0:(t.append(fe(R,h,i),c(f)),!1)}const p=[],w=Object.assign(Pt,{defaultVisitor:l,convertValue:c,isVisitable:ee});function y(f,h){if(!a.isUndefined(f)){if(p.indexOf(f)!==-1)throw Error("Circular reference detected in "+h.join("."));p.push(f),a.forEach(f,function(g,x){(!(a.isUndefined(g)||g===null)&&s.call(t,g,a.isString(x)?x.trim():x,h,w))===!0&&y(g,h?h.concat(x):[x])}),p.pop()}}if(!a.isObject(e))throw new TypeError("data must be an object");return y(e),t}function de(e){const t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,function(r){return t[r]})}function se(e,t){this._pairs=[],e&&$(e,this,t)}const ke=se.prototype;ke.append=function(t,n){this._pairs.push([t,n])};ke.toString=function(t){const n=t?function(r){return t.call(this,r,de)}:de;return this._pairs.map(function(s){return n(s[0])+"="+n(s[1])},"").join("&")};function xt(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function je(e,t,n){if(!t)return e;const r=n&&n.encode||xt,s=n&&n.serialize;let i;if(s?i=s(t,n):i=a.isURLSearchParams(t)?t.toString():new se(t,n).toString(r),i){const o=e.indexOf("#");o!==-1&&(e=e.slice(0,o)),e+=(e.indexOf("?")===-1?"?":"&")+i}return e}class Ct{constructor(){this.handlers=[]}use(t,n,r){return this.handlers.push({fulfilled:t,rejected:n,synchronous:r?r.synchronous:!1,runWhen:r?r.runWhen:null}),this.handlers.length-1}eject(t){this.handlers[t]&&(this.handlers[t]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(t){a.forEach(this.handlers,function(r){r!==null&&t(r)})}}const pe=Ct,Ie={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},Ft=typeof URLSearchParams<"u"?URLSearchParams:se,Dt=typeof FormData<"u"?FormData:null,Lt=typeof Blob<"u"?Blob:null,_t=(()=>{let e;return typeof navigator<"u"&&((e=navigator.product)==="ReactNative"||e==="NativeScript"||e==="NS")?!1:typeof window<"u"&&typeof document<"u"})(),Bt=(()=>typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function")(),S={isBrowser:!0,classes:{URLSearchParams:Ft,FormData:Dt,Blob:Lt},isStandardBrowserEnv:_t,isStandardBrowserWebWorkerEnv:Bt,protocols:["http","https","file","blob","url","data"]};function Ut(e,t){return $(e,new S.classes.URLSearchParams,Object.assign({visitor:function(n,r,s,i){return S.isNode&&a.isBuffer(n)?(this.append(r,n.toString("base64")),!1):i.defaultVisitor.apply(this,arguments)}},t))}function kt(e){return a.matchAll(/\w+|\[(\w*)]/g,e).map(t=>t[0]==="[]"?"":t[1]||t[0])}function jt(e){const t={},n=Object.keys(e);let r;const s=n.length;let i;for(r=0;r<s;r++)i=n[r],t[i]=e[i];return t}function Me(e){function t(n,r,s,i){let o=n[i++];const u=Number.isFinite(+o),d=i>=n.length;return o=!o&&a.isArray(s)?s.length:o,d?(a.hasOwnProp(s,o)?s[o]=[s[o],r]:s[o]=r,!u):((!s[o]||!a.isObject(s[o]))&&(s[o]=[]),t(n,r,s[o],i)&&a.isArray(s[o])&&(s[o]=jt(s[o])),!u)}if(a.isFormData(e)&&a.isFunction(e.entries)){const n={};return a.forEachEntry(e,(r,s)=>{t(kt(r),s,n,0)}),n}return null}const It={"Content-Type":void 0};function Mt(e,t,n){if(a.isString(e))try{return(t||JSON.parse)(e),a.trim(e)}catch(r){if(r.name!=="SyntaxError")throw r}return(n||JSON.stringify)(e)}const V={transitional:Ie,adapter:["xhr","http"],transformRequest:[function(t,n){const r=n.getContentType()||"",s=r.indexOf("application/json")>-1,i=a.isObject(t);if(i&&a.isHTMLForm(t)&&(t=new FormData(t)),a.isFormData(t))return s&&s?JSON.stringify(Me(t)):t;if(a.isArrayBuffer(t)||a.isBuffer(t)||a.isStream(t)||a.isFile(t)||a.isBlob(t))return t;if(a.isArrayBufferView(t))return t.buffer;if(a.isURLSearchParams(t))return n.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),t.toString();let u;if(i){if(r.indexOf("application/x-www-form-urlencoded")>-1)return Ut(t,this.formSerializer).toString();if((u=a.isFileList(t))||r.indexOf("multipart/form-data")>-1){const d=this.env&&this.env.FormData;return $(u?{"files[]":t}:t,d&&new d,this.formSerializer)}}return i||s?(n.setContentType("application/json",!1),Mt(t)):t}],transformResponse:[function(t){const n=this.transitional||V.transitional,r=n&&n.forcedJSONParsing,s=this.responseType==="json";if(t&&a.isString(t)&&(r&&!this.responseType||s)){const o=!(n&&n.silentJSONParsing)&&s;try{return JSON.parse(t)}catch(u){if(o)throw u.name==="SyntaxError"?m.from(u,m.ERR_BAD_RESPONSE,this,null,this.response):u}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:S.classes.FormData,Blob:S.classes.Blob},validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*"}}};a.forEach(["delete","get","head"],function(t){V.headers[t]={}});a.forEach(["post","put","patch"],function(t){V.headers[t]=a.merge(It)});const oe=V,Ht=a.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),qt=e=>{const t={};let n,r,s;return e&&e.split(`
`).forEach(function(o){s=o.indexOf(":"),n=o.substring(0,s).trim().toLowerCase(),r=o.substring(s+1).trim(),!(!n||t[n]&&Ht[n])&&(n==="set-cookie"?t[n]?t[n].push(r):t[n]=[r]:t[n]=t[n]?t[n]+", "+r:r)}),t},he=Symbol("internals");function D(e){return e&&String(e).trim().toLowerCase()}function I(e){return e===!1||e==null?e:a.isArray(e)?e.map(I):String(e)}function vt(e){const t=Object.create(null),n=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let r;for(;r=n.exec(e);)t[r[1]]=r[2];return t}const zt=e=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());function X(e,t,n,r,s){if(a.isFunction(r))return r.call(this,t,n);if(s&&(t=n),!!a.isString(t)){if(a.isString(r))return t.indexOf(r)!==-1;if(a.isRegExp(r))return r.test(t)}}function Jt(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(t,n,r)=>n.toUpperCase()+r)}function $t(e,t){const n=a.toCamelCase(" "+t);["get","set","has"].forEach(r=>{Object.defineProperty(e,r+n,{value:function(s,i,o){return this[r].call(this,t,s,i,o)},configurable:!0})})}class W{constructor(t){t&&this.set(t)}set(t,n,r){const s=this;function i(u,d,c){const l=D(d);if(!l)throw new Error("header name must be a non-empty string");const p=a.findKey(s,l);(!p||s[p]===void 0||c===!0||c===void 0&&s[p]!==!1)&&(s[p||d]=I(u))}const o=(u,d)=>a.forEach(u,(c,l)=>i(c,l,d));return a.isPlainObject(t)||t instanceof this.constructor?o(t,n):a.isString(t)&&(t=t.trim())&&!zt(t)?o(qt(t),n):t!=null&&i(n,t,r),this}get(t,n){if(t=D(t),t){const r=a.findKey(this,t);if(r){const s=this[r];if(!n)return s;if(n===!0)return vt(s);if(a.isFunction(n))return n.call(this,s,r);if(a.isRegExp(n))return n.exec(s);throw new TypeError("parser must be boolean|regexp|function")}}}has(t,n){if(t=D(t),t){const r=a.findKey(this,t);return!!(r&&this[r]!==void 0&&(!n||X(this,this[r],r,n)))}return!1}delete(t,n){const r=this;let s=!1;function i(o){if(o=D(o),o){const u=a.findKey(r,o);u&&(!n||X(r,r[u],u,n))&&(delete r[u],s=!0)}}return a.isArray(t)?t.forEach(i):i(t),s}clear(t){const n=Object.keys(this);let r=n.length,s=!1;for(;r--;){const i=n[r];(!t||X(this,this[i],i,t,!0))&&(delete this[i],s=!0)}return s}normalize(t){const n=this,r={};return a.forEach(this,(s,i)=>{const o=a.findKey(r,i);if(o){n[o]=I(s),delete n[i];return}const u=t?Jt(i):String(i).trim();u!==i&&delete n[i],n[u]=I(s),r[u]=!0}),this}concat(...t){return this.constructor.concat(this,...t)}toJSON(t){const n=Object.create(null);return a.forEach(this,(r,s)=>{r!=null&&r!==!1&&(n[s]=t&&a.isArray(r)?r.join(", "):r)}),n}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([t,n])=>t+": "+n).join(`
`)}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(t){return t instanceof this?t:new this(t)}static concat(t,...n){const r=new this(t);return n.forEach(s=>r.set(s)),r}static accessor(t){const r=(this[he]=this[he]={accessors:{}}).accessors,s=this.prototype;function i(o){const u=D(o);r[u]||($t(s,o),r[u]=!0)}return a.isArray(t)?t.forEach(i):i(t),this}}W.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);a.freezeMethods(W.prototype);a.freezeMethods(W);const A=W;function Q(e,t){const n=this||oe,r=t||n,s=A.from(r.headers);let i=r.data;return a.forEach(e,function(u){i=u.call(n,i,s.normalize(),t?t.status:void 0)}),s.normalize(),i}function He(e){return!!(e&&e.__CANCEL__)}function U(e,t,n){m.call(this,e??"canceled",m.ERR_CANCELED,t,n),this.name="CanceledError"}a.inherits(U,m,{__CANCEL__:!0});function Vt(e,t,n){const r=n.config.validateStatus;!n.status||!r||r(n.status)?e(n):t(new m("Request failed with status code "+n.status,[m.ERR_BAD_REQUEST,m.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n))}const Wt=S.isStandardBrowserEnv?function(){return{write:function(n,r,s,i,o,u){const d=[];d.push(n+"="+encodeURIComponent(r)),a.isNumber(s)&&d.push("expires="+new Date(s).toGMTString()),a.isString(i)&&d.push("path="+i),a.isString(o)&&d.push("domain="+o),u===!0&&d.push("secure"),document.cookie=d.join("; ")},read:function(n){const r=document.cookie.match(new RegExp("(^|;\\s*)("+n+")=([^;]*)"));return r?decodeURIComponent(r[3]):null},remove:function(n){this.write(n,"",Date.now()-864e5)}}}():function(){return{write:function(){},read:function(){return null},remove:function(){}}}();function Kt(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)}function Gt(e,t){return t?e.replace(/\/+$/,"")+"/"+t.replace(/^\/+/,""):e}function qe(e,t){return e&&!Kt(t)?Gt(e,t):t}const Xt=S.isStandardBrowserEnv?function(){const t=/(msie|trident)/i.test(navigator.userAgent),n=document.createElement("a");let r;function s(i){let o=i;return t&&(n.setAttribute("href",o),o=n.href),n.setAttribute("href",o),{href:n.href,protocol:n.protocol?n.protocol.replace(/:$/,""):"",host:n.host,search:n.search?n.search.replace(/^\?/,""):"",hash:n.hash?n.hash.replace(/^#/,""):"",hostname:n.hostname,port:n.port,pathname:n.pathname.charAt(0)==="/"?n.pathname:"/"+n.pathname}}return r=s(window.location.href),function(o){const u=a.isString(o)?s(o):o;return u.protocol===r.protocol&&u.host===r.host}}():function(){return function(){return!0}}();function Qt(e){const t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}function Yt(e,t){e=e||10;const n=new Array(e),r=new Array(e);let s=0,i=0,o;return t=t!==void 0?t:1e3,function(d){const c=Date.now(),l=r[i];o||(o=c),n[s]=d,r[s]=c;let p=i,w=0;for(;p!==s;)w+=n[p++],p=p%e;if(s=(s+1)%e,s===i&&(i=(i+1)%e),c-o<t)return;const y=l&&c-l;return y?Math.round(w*1e3/y):void 0}}function me(e,t){let n=0;const r=Yt(50,250);return s=>{const i=s.loaded,o=s.lengthComputable?s.total:void 0,u=i-n,d=r(u),c=i<=o;n=i;const l={loaded:i,total:o,progress:o?i/o:void 0,bytes:u,rate:d||void 0,estimated:d&&o&&c?(o-i)/d:void 0,event:s};l[t?"download":"upload"]=!0,e(l)}}const Zt=typeof XMLHttpRequest<"u",en=Zt&&function(e){return new Promise(function(n,r){let s=e.data;const i=A.from(e.headers).normalize(),o=e.responseType;let u;function d(){e.cancelToken&&e.cancelToken.unsubscribe(u),e.signal&&e.signal.removeEventListener("abort",u)}a.isFormData(s)&&(S.isStandardBrowserEnv||S.isStandardBrowserWebWorkerEnv?i.setContentType(!1):i.setContentType("multipart/form-data;",!1));let c=new XMLHttpRequest;if(e.auth){const y=e.auth.username||"",f=e.auth.password?unescape(encodeURIComponent(e.auth.password)):"";i.set("Authorization","Basic "+btoa(y+":"+f))}const l=qe(e.baseURL,e.url);c.open(e.method.toUpperCase(),je(l,e.params,e.paramsSerializer),!0),c.timeout=e.timeout;function p(){if(!c)return;const y=A.from("getAllResponseHeaders"in c&&c.getAllResponseHeaders()),h={data:!o||o==="text"||o==="json"?c.responseText:c.response,status:c.status,statusText:c.statusText,headers:y,config:e,request:c};Vt(function(g){n(g),d()},function(g){r(g),d()},h),c=null}if("onloadend"in c?c.onloadend=p:c.onreadystatechange=function(){!c||c.readyState!==4||c.status===0&&!(c.responseURL&&c.responseURL.indexOf("file:")===0)||setTimeout(p)},c.onabort=function(){c&&(r(new m("Request aborted",m.ECONNABORTED,e,c)),c=null)},c.onerror=function(){r(new m("Network Error",m.ERR_NETWORK,e,c)),c=null},c.ontimeout=function(){let f=e.timeout?"timeout of "+e.timeout+"ms exceeded":"timeout exceeded";const h=e.transitional||Ie;e.timeoutErrorMessage&&(f=e.timeoutErrorMessage),r(new m(f,h.clarifyTimeoutError?m.ETIMEDOUT:m.ECONNABORTED,e,c)),c=null},S.isStandardBrowserEnv){const y=(e.withCredentials||Xt(l))&&e.xsrfCookieName&&Wt.read(e.xsrfCookieName);y&&i.set(e.xsrfHeaderName,y)}s===void 0&&i.setContentType(null),"setRequestHeader"in c&&a.forEach(i.toJSON(),function(f,h){c.setRequestHeader(h,f)}),a.isUndefined(e.withCredentials)||(c.withCredentials=!!e.withCredentials),o&&o!=="json"&&(c.responseType=e.responseType),typeof e.onDownloadProgress=="function"&&c.addEventListener("progress",me(e.onDownloadProgress,!0)),typeof e.onUploadProgress=="function"&&c.upload&&c.upload.addEventListener("progress",me(e.onUploadProgress)),(e.cancelToken||e.signal)&&(u=y=>{c&&(r(!y||y.type?new U(null,e,c):y),c.abort(),c=null)},e.cancelToken&&e.cancelToken.subscribe(u),e.signal&&(e.signal.aborted?u():e.signal.addEventListener("abort",u)));const w=Qt(l);if(w&&S.protocols.indexOf(w)===-1){r(new m("Unsupported protocol "+w+":",m.ERR_BAD_REQUEST,e));return}c.send(s||null)})},M={http:Tt,xhr:en};a.forEach(M,(e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch{}Object.defineProperty(e,"adapterName",{value:t})}});const tn={getAdapter:e=>{e=a.isArray(e)?e:[e];const{length:t}=e;let n,r;for(let s=0;s<t&&(n=e[s],!(r=a.isString(n)?M[n.toLowerCase()]:n));s++);if(!r)throw r===!1?new m(`Adapter ${n} is not supported by the environment`,"ERR_NOT_SUPPORT"):new Error(a.hasOwnProp(M,n)?`Adapter '${n}' is not available in the build`:`Unknown adapter '${n}'`);if(!a.isFunction(r))throw new TypeError("adapter is not a function");return r},adapters:M};function Y(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new U(null,e)}function ye(e){return Y(e),e.headers=A.from(e.headers),e.data=Q.call(e,e.transformRequest),["post","put","patch"].indexOf(e.method)!==-1&&e.headers.setContentType("application/x-www-form-urlencoded",!1),tn.getAdapter(e.adapter||oe.adapter)(e).then(function(r){return Y(e),r.data=Q.call(e,e.transformResponse,r),r.headers=A.from(r.headers),r},function(r){return He(r)||(Y(e),r&&r.response&&(r.response.data=Q.call(e,e.transformResponse,r.response),r.response.headers=A.from(r.response.headers))),Promise.reject(r)})}const Ee=e=>e instanceof A?e.toJSON():e;function C(e,t){t=t||{};const n={};function r(c,l,p){return a.isPlainObject(c)&&a.isPlainObject(l)?a.merge.call({caseless:p},c,l):a.isPlainObject(l)?a.merge({},l):a.isArray(l)?l.slice():l}function s(c,l,p){if(a.isUndefined(l)){if(!a.isUndefined(c))return r(void 0,c,p)}else return r(c,l,p)}function i(c,l){if(!a.isUndefined(l))return r(void 0,l)}function o(c,l){if(a.isUndefined(l)){if(!a.isUndefined(c))return r(void 0,c)}else return r(void 0,l)}function u(c,l,p){if(p in t)return r(c,l);if(p in e)return r(void 0,c)}const d={url:i,method:i,data:i,baseURL:o,transformRequest:o,transformResponse:o,paramsSerializer:o,timeout:o,timeoutMessage:o,withCredentials:o,adapter:o,responseType:o,xsrfCookieName:o,xsrfHeaderName:o,onUploadProgress:o,onDownloadProgress:o,decompress:o,maxContentLength:o,maxBodyLength:o,beforeRedirect:o,transport:o,httpAgent:o,httpsAgent:o,cancelToken:o,socketPath:o,responseEncoding:o,validateStatus:u,headers:(c,l)=>s(Ee(c),Ee(l),!0)};return a.forEach(Object.keys(Object.assign({},e,t)),function(l){const p=d[l]||s,w=p(e[l],t[l],l);a.isUndefined(w)&&p!==u||(n[l]=w)}),n}const ve="1.4.0",ie={};["object","boolean","number","function","string","symbol"].forEach((e,t)=>{ie[e]=function(r){return typeof r===e||"a"+(t<1?"n ":" ")+e}});const we={};ie.transitional=function(t,n,r){function s(i,o){return"[Axios v"+ve+"] Transitional option '"+i+"'"+o+(r?". "+r:"")}return(i,o,u)=>{if(t===!1)throw new m(s(o," has been removed"+(n?" in "+n:"")),m.ERR_DEPRECATED);return n&&!we[o]&&(we[o]=!0,console.warn(s(o," has been deprecated since v"+n+" and will be removed in the near future"))),t?t(i,o,u):!0}};function nn(e,t,n){if(typeof e!="object")throw new m("options must be an object",m.ERR_BAD_OPTION_VALUE);const r=Object.keys(e);let s=r.length;for(;s-- >0;){const i=r[s],o=t[i];if(o){const u=e[i],d=u===void 0||o(u,i,e);if(d!==!0)throw new m("option "+i+" must be "+d,m.ERR_BAD_OPTION_VALUE);continue}if(n!==!0)throw new m("Unknown option "+i,m.ERR_BAD_OPTION)}}const te={assertOptions:nn,validators:ie},N=te.validators;class q{constructor(t){this.defaults=t,this.interceptors={request:new pe,response:new pe}}request(t,n){typeof t=="string"?(n=n||{},n.url=t):n=t||{},n=C(this.defaults,n);const{transitional:r,paramsSerializer:s,headers:i}=n;r!==void 0&&te.assertOptions(r,{silentJSONParsing:N.transitional(N.boolean),forcedJSONParsing:N.transitional(N.boolean),clarifyTimeoutError:N.transitional(N.boolean)},!1),s!=null&&(a.isFunction(s)?n.paramsSerializer={serialize:s}:te.assertOptions(s,{encode:N.function,serialize:N.function},!0)),n.method=(n.method||this.defaults.method||"get").toLowerCase();let o;o=i&&a.merge(i.common,i[n.method]),o&&a.forEach(["delete","get","head","post","put","patch","common"],f=>{delete i[f]}),n.headers=A.concat(o,i);const u=[];let d=!0;this.interceptors.request.forEach(function(h){typeof h.runWhen=="function"&&h.runWhen(n)===!1||(d=d&&h.synchronous,u.unshift(h.fulfilled,h.rejected))});const c=[];this.interceptors.response.forEach(function(h){c.push(h.fulfilled,h.rejected)});let l,p=0,w;if(!d){const f=[ye.bind(this),void 0];for(f.unshift.apply(f,u),f.push.apply(f,c),w=f.length,l=Promise.resolve(n);p<w;)l=l.then(f[p++],f[p++]);return l}w=u.length;let y=n;for(p=0;p<w;){const f=u[p++],h=u[p++];try{y=f(y)}catch(R){h.call(this,R);break}}try{l=ye.call(this,y)}catch(f){return Promise.reject(f)}for(p=0,w=c.length;p<w;)l=l.then(c[p++],c[p++]);return l}getUri(t){t=C(this.defaults,t);const n=qe(t.baseURL,t.url);return je(n,t.params,t.paramsSerializer)}}a.forEach(["delete","get","head","options"],function(t){q.prototype[t]=function(n,r){return this.request(C(r||{},{method:t,url:n,data:(r||{}).data}))}});a.forEach(["post","put","patch"],function(t){function n(r){return function(i,o,u){return this.request(C(u||{},{method:t,headers:r?{"Content-Type":"multipart/form-data"}:{},url:i,data:o}))}}q.prototype[t]=n(),q.prototype[t+"Form"]=n(!0)});const H=q;class ae{constructor(t){if(typeof t!="function")throw new TypeError("executor must be a function.");let n;this.promise=new Promise(function(i){n=i});const r=this;this.promise.then(s=>{if(!r._listeners)return;let i=r._listeners.length;for(;i-- >0;)r._listeners[i](s);r._listeners=null}),this.promise.then=s=>{let i;const o=new Promise(u=>{r.subscribe(u),i=u}).then(s);return o.cancel=function(){r.unsubscribe(i)},o},t(function(i,o,u){r.reason||(r.reason=new U(i,o,u),n(r.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(t){if(this.reason){t(this.reason);return}this._listeners?this._listeners.push(t):this._listeners=[t]}unsubscribe(t){if(!this._listeners)return;const n=this._listeners.indexOf(t);n!==-1&&this._listeners.splice(n,1)}static source(){let t;return{token:new ae(function(s){t=s}),cancel:t}}}const rn=ae;function sn(e){return function(n){return e.apply(null,n)}}function on(e){return a.isObject(e)&&e.isAxiosError===!0}const ne={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(ne).forEach(([e,t])=>{ne[t]=e});const an=ne;function ze(e){const t=new H(e),n=Te(H.prototype.request,t);return a.extend(n,H.prototype,t,{allOwnKeys:!0}),a.extend(n,t,null,{allOwnKeys:!0}),n.create=function(s){return ze(C(e,s))},n}const E=ze(oe);E.Axios=H;E.CanceledError=U;E.CancelToken=rn;E.isCancel=He;E.VERSION=ve;E.toFormData=$;E.AxiosError=m;E.Cancel=E.CanceledError;E.all=function(t){return Promise.all(t)};E.spread=sn;E.isAxiosError=on;E.mergeConfig=C;E.AxiosHeaders=A;E.formToJSON=e=>Me(a.isHTMLForm(e)?new FormData(e):e);E.HttpStatusCode=an;E.default=E;const K=E;function ce(){document.getElementById("modal").classList.toggle("hidden")}const be=document.getElementById("toggleModal");be&&be.addEventListener("click",()=>{ce()});const ge=document.getElementById("resetPasswordForm"),L=document.getElementById("messageContainer"),P=document.querySelector(".messageContainer_sendotp");function T(e,t,n){const r=document.createElement("div");r.classList.add(`bg-${e}-100`,`border-${e}-500`,`text-${e}-700`,"rounded","text-[#ff0000]"),r.textContent=t,n.innerHTML="",n.appendChild(r)}ge&&ge.addEventListener("submit",async e=>{e.preventDefault();const t=new FormData(e.target);try{const n=await K.post("/api/auth/reset-password",t);T("success",n.data.data.message,L)}catch(n){T("error","An error occurred. Please try again.",L),console.error(n)}});const Se=document.getElementById("authform");Se&&Se.addEventListener("submit",async e=>{console.log("authform submit"),e.preventDefault(),L.innerHTML="";const t=new FormData(e.target),n=t.get("code").trim(),r=t.get("phone").trim(),s=`${n}${r}`;console.log("mergedPhoneNumber submit",s),document.querySelector("phonenumber").innerText="",document.querySelector("phonenumber").innerText=s,document.querySelector('#authform_popup input[name="phone"]').value=s,t.set("phone",s);try{const o=await K.post("/api/auth/send-otp",t);console.log(o.data),o.data.status=="success"?ce():T("error",o.data.data.message,L)}catch(o){if(console.log("error",o),o.response.data.data!=null||o.response.data.data!=null)var i=o.response.data.data.message;else var i=o.response.data.message;T("error",i,L)}});const Oe=document.querySelector(".resendOtp");Oe&&Oe.addEventListener("click",async e=>{e.preventDefault(),P.innerHTML="";const t=document.querySelector('#authform_popup input[name="phone"]').value,n=new FormData;n.set("phone",t),n.set("type","number");try{const s=await K.post("/api/auth/send-otp",n);console.log(s.data),s.data.status=="success"?console.log("sent otp"):T("error",s.data.data.message,P)}catch(s){if(console.log("error",s),s.response.data.data!=null||s.response.data.data!=null)var r=s.response.data.data.message;else var r=s.response.data.message;T("error",r,P)}});const Re=document.getElementById("authform_popup");Re&&Re.addEventListener("submit",async e=>{e.preventDefault(),P.innerHTML="";const t=new FormData(e.target);let n="";for(let s=1;s<=6;s++)n+=t.get(`otp${s}`);t.set("verification_code",n);try{const s=await K.post("/api/auth/login-verifyotp",t);console.log(s.data),s.data.status=="success"?(console.log("response sucess"),s.data.accessToken!=null?T("success","Logging in..",P):ce()):T("error",s.data.data.message,P)}catch(s){if(console.log("error",s),s.response.data.data!=null||s.response.data.data!=null)var r=s.response.data.data.message;else var r=s.response.data.message;T("error",r,P)}});const Ae=document.querySelectorAll(".otp-automovetonextinput");Ae&&Ae.forEach((e,t,n)=>{console.log("autmove",e),console.log("autmove",t),e.addEventListener("input",function(){e.value.length===1&&t<n.length-1&&n[t+1].focus()}),e.addEventListener("keydown",function(r){r.key==="Backspace"&&e.value===""&&t>0&&n[t-1].focus()})});
