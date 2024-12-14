/*--------------------------------------packges section start--------------------------- */
document.addEventListener("DOMContentLoaded", function() {
    let loadMoreBtn = document.querySelector('.loadmore .btn1');
    let currentItem = 3; //................... Start showing items from index 3.................//
  
    loadMoreBtn.addEventListener('click', function() {
        let boxes = document.querySelectorAll('.box-container1 .box1');
        for (let i = currentItem; i < Math.min(currentItem + 3, boxes.length); i++) {
            boxes[i].style.display = 'block';
        }
        currentItem += 3;
  
        //..................... Hide the button if all items are displayed...................//
        if (currentItem >= boxes.length) {
            loadMoreBtn.style.display = 'none';
        }
    });
  });
  /*--------------------------------------packges section end--------------------------- */