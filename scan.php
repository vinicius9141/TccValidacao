<html>
  <head><title>ScanQRCode</title></head>
  <body>
  	 
  	   <video id="webcam"></video>
   


    <script src="js/instascan.min.js"></script>
    <script>
      const scanner = new Instascan.Scanner({
        video: document.getElementById('webcam')
      })
      scanner.addListener('scan', content => {
        console.log(content)
      })
      Instascan.Camera.getCameras().then( cameras => {
        if(cameras.length > 0){
          scanner.start(cameras[0])
        }
      })
    </script>
  </body>
</html>