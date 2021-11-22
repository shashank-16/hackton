
let pc;
let localstream;
// src="https://webrtc.github.io/adapter/adapter-latest.js";
// let sendto =callbtn.data('user');
// const remotevideo= document.querySelector("#remotevideo");
const localvideo=document.querySelector("#localvideo");

const mediaConst ={
    video:true
}
function getconn()
{
    if(!pc)
    {
        pc= new RTCPeerConnection();

    }
}

async function getcam()
{
    let mediastream;
    try{
        if(!pc)
        {
           await getconn();
        }
        mediastream= await navigator.mediaDevices.getUserMedia(mediaConst);
        //lcoalvido 
        localvideo.srcObject= mediastream;
        localstream=mediastream;
        localstream.getTracks().forEach(track => pc.addTrack(track,localstream));
        

    }
    catch(error){
        console.log(error);
    }
}



// function send()
// {
//     conn.send(JSON.stringify({

    
//     }));
// }



window.addEventListener("load",()=>{
    getcam();

    console.log(1);
    pc.ontrack = e =>{
    localvideo.srcObject=e.streams[0];
    }

});