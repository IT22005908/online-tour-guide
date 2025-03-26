function swapItems() {
    const container = document.getElementById('cont');
    const swaps = container.getElementsByClassName('tour_demo');
  
    // Check if there are at least two items
    if (swaps.length >= 2) {
      const firstItem = swaps[2];
      const secondItem = swaps[1];
  
      // Swap the items by replacing their positions
      container.insertBefore(secondItem, firstItem);
    }
  }
  
  // Call the swapItems function to initiate the swap
  setInterval(swapItems,3000);
  