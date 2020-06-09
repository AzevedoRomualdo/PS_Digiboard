var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("iImagem").files[0]);          
          oFReader.onload = function(oFREvent){
          document.getElementById("upload").src=oFREvent.target.result;
          };
          
          function PreviewImage(){
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("iImagem").files[0]);          
            oFReader.onload = function(oFREvent){
            document.getElementById("upload").src=oFREvent.target.result;
          };
          
          };