<script>
let myFavMeals=[];
      document.querySelector('#myFileImage').addEventListener('change', function(){
          const reader = new FileReader();

          reader.addEventListener('load', function(){
            var new_data = reader.result;
            alert('hi');
            if (localStorage.getItem("recent-image") === null) {
            {
              localStorage.setItem('recent-image','[]')
            }

            oldData = JSON.parse(localStorage.getItem('recent-image'))
            console.log('old'+oldData);

            oldData.push(new_data);

            localStorage.setItem('recent-image',JSON.stringify(oldData))
          })
          reader.readAsDataURL(this.files[0]);
      });

      document.addEventListener('DOMContentLoaded', () => {
        const readImageDataUrl = localStorage.getItem('recent-image');
        if(readImageDataUrl)
        {
          document.querySelector('#imagePreview').setAttribute('src',readImageDataUrl);
        }
        let array1=[readImageDataUrl];
        myFavMeals.push(array1);
        // const storedBlogs = JSON.parse(localStorage.getItem('recent-image'));
        // // console.log(storedBlogs[0])
        // for (let i = 0; i < storedBlogs.length; i++) {
        //     var elem = document.createElement('img');
        //     elem.src = storedBlogs[i];
        //     elem.width = '300';
        //     elem.height = '180';


        //     document.getElementById("placehere").appendChild(elem);
        //     elem.setAttribute("style", "padding:20px; display:flex");

        //     var button1 = document.createElement('button');
        //     document.getElementById("placehere").appendChild(button1);
        //     button1.innerHTML='Remove Image';

        //     console.log(storedBlogs[i])


        // }

      })

     