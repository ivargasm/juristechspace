import{W as w,r as f,j as s,a as x}from"./app-cda35091.js";import{G as j}from"./GuestLayout-cda1cb50.js";import{T as t,I as m}from"./TextInput-2bb95b6b.js";import{I as l}from"./InputLabel-a9602163.js";import{P as v}from"./PrimaryButton-150bfb5c.js";import"./ApplicationLogo-463184ba.js";function _({token:i,email:n}){const{data:e,setData:r,post:d,processing:p,errors:o,reset:c}=w({token:i,email:n,password:"",password_confirmation:""});f.useEffect(()=>()=>{c("password","password_confirmation")},[]);const u=a=>{a.preventDefault(),d(route("password.store"))};return s.jsxs(j,{children:[s.jsx(x,{title:"Reset Password"}),s.jsxs("form",{onSubmit:u,children:[s.jsxs("div",{children:[s.jsx(l,{htmlFor:"email",value:"Email"}),s.jsx(t,{id:"email",type:"email",name:"email",value:e.email,className:"mt-1 block w-full",autoComplete:"username",onChange:a=>r("email",a.target.value)}),s.jsx(m,{message:o.email,className:"mt-2"})]}),s.jsxs("div",{className:"mt-4",children:[s.jsx(l,{htmlFor:"password",value:"Password"}),s.jsx(t,{id:"password",type:"password",name:"password",value:e.password,className:"mt-1 block w-full",autoComplete:"new-password",isFocused:!0,onChange:a=>r("password",a.target.value)}),s.jsx(m,{message:o.password,className:"mt-2"})]}),s.jsxs("div",{className:"mt-4",children:[s.jsx(l,{htmlFor:"password_confirmation",value:"Confirm Password"}),s.jsx(t,{type:"password",name:"password_confirmation",value:e.password_confirmation,className:"mt-1 block w-full",autoComplete:"new-password",onChange:a=>r("password_confirmation",a.target.value)}),s.jsx(m,{message:o.password_confirmation,className:"mt-2"})]}),s.jsx("div",{className:"flex items-center justify-end mt-4",children:s.jsx(v,{className:"ml-4",disabled:p,children:"Reset Password"})})]})]})}export{_ as default};
