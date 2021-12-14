var e=Object.defineProperty,a=Object.prototype.hasOwnProperty,r=Object.getOwnPropertySymbols,l=Object.prototype.propertyIsEnumerable,o=(a,r,l)=>r in a?e(a,r,{enumerable:!0,configurable:!0,writable:!0,value:l}):a[r]=l,t=(e,t)=>{for(var s in t||(t={}))a.call(t,s)&&o(e,s,t[s]);if(r)for(var s of r(t))l.call(t,s)&&o(e,s,t[s]);return e};import{k as s,r as d,o as m,s as u,t as n,v as p,x as i,u as f,a as c,p as w,m as b,b as y,d as _,e as D,f as V,j as v,g as x}from"./index.b28443d6.js";const h={name:"UserForm",setup(){const{proxy:e}=p();console.log("proxy",e);const a=s(null),r=i(),l=f(),{id:o}=r.query,w=d({id:o,formData:{username:"",email:"",password:"",password_confirmation:""},rules:{username:[{required:"true"}],email:[{required:"true",type:"email"}],password:[{required:"true",min:6,max:40}],password_confirmation:[{required:"true",min:6,max:40}]}});m((()=>{})),u((()=>{}));return t(t({},n(w)),{formRef:a,submitAdd:()=>{a.value.validate((async e=>{if(e){let e=w.formData;await c.storeUser(e),await l.push({name:"user"})}}))}})}},U=v();w("data-v-21744c02");const j=x("Submit");b();const O=U(((e,a,r,l,o,t)=>{const s=y("el-input"),d=y("el-form-item"),m=y("el-button"),u=y("el-form"),n=y("el-col"),p=y("el-row");return _(),D("div",null,[V(p,null,{default:U((()=>[V(n,{span:12},{default:U((()=>[V(u,{model:e.formData,rules:e.rules,ref:"formRef","label-width":"200px",class:"formData"},{default:U((()=>[V(d,{label:"Username",prop:"username"},{default:U((()=>[V(s,{modelValue:e.formData.username,"onUpdate:modelValue":a[1]||(a[1]=a=>e.formData.username=a),placeholder:""},null,8,["modelValue"])])),_:1}),V(d,{label:"Email",prop:"email"},{default:U((()=>[V(s,{modelValue:e.formData.email,"onUpdate:modelValue":a[2]||(a[2]=a=>e.formData.email=a),placeholder:""},null,8,["modelValue"])])),_:1}),V(d,{label:"Password",prop:"password"},{default:U((()=>[V(s,{type:"password",modelValue:e.formData.password,"onUpdate:modelValue":a[3]||(a[3]=a=>e.formData.password=a),placeholder:""},null,8,["modelValue"])])),_:1}),V(d,{label:"Password Confirmation",prop:"password_confirmation"},{default:U((()=>[V(s,{type:"password",modelValue:e.formData.password_confirmation,"onUpdate:modelValue":a[4]||(a[4]=a=>e.formData.password_confirmation=a),placeholder:""},null,8,["modelValue"])])),_:1}),V(d,null,{default:U((()=>[V(m,{type:"primary",onClick:a[5]||(a[5]=e=>l.submitAdd())},{default:U((()=>[j])),_:1})])),_:1})])),_:1},8,["model","rules"])])),_:1})])),_:1})])}));h.render=O,h.__scopeId="data-v-21744c02";export default h;