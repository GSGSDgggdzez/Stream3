import React, { useRef, useEffect, useState } from 'react';

interface ScrollContentProps {
  title: string;
  items: any[];
  renderItem: (item: any) => React.ReactNode;
  scrollSpeed?: number; // Optional speed control in pixels per second
}

const ScrollContent = ({ title, items, renderItem, scrollSpeed = 0.5 }: ScrollContentProps) => {
  const scrollContainerRef = useRef<HTMLDivElement | null>(null);
  const [isHovered, setIsHovered] = useState(false);

  useEffect(() => {
    const container = scrollContainerRef.current;
    if (!container) return;

    let animationFrameId: number;
    let lastTimestamp: number;

    const animate = (timestamp: number) => {
      if (!lastTimestamp) lastTimestamp = timestamp;
      const deltaTime = timestamp - lastTimestamp;

      if (!isHovered) {
        container.scrollLeft += scrollSpeed * deltaTime;

        // Reset scroll position when reaching the end
        if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
          container.scrollLeft = 0;
        }
      }

      lastTimestamp = timestamp;
      animationFrameId = requestAnimationFrame(animate);
    };

    animationFrameId = requestAnimationFrame(animate);

    return () => {
      cancelAnimationFrame(animationFrameId);
    };
  }, [isHovered, scrollSpeed]);

  const scroll = (direction: 'left' | 'right') => {
    const container = scrollContainerRef.current;
    if (!container) return;
    const scrollAmount = 300;
    const newScrollPosition = container.scrollLeft + (direction === 'left' ? -scrollAmount : scrollAmount);
    container.scrollTo({
      left: newScrollPosition,
      behavior: 'smooth'
    });
  };

  return (
    <div className="w-full px-6 py-4">
      <div className="flex items-center justify-between mb-4">
        <h2 className="text-2xl font-bold text-gray-800">{title}</h2>
        <div className="flex gap-2">
          <button
            onClick={() => scroll('left')}
            className="px-4 py-2 bg-black/70 hover:bg-black/90 text-white rounded-md transition-colors"
          >
            ←
          </button>
          <button
            onClick={() => scroll('right')}
            className="px-4 py-2 bg-black/70 hover:bg-black/90 text-white rounded-md transition-colors"
          >
            →
          </button>
        </div>
      </div>
      
      <div
        ref={scrollContainerRef}
        className="flex gap-5 overflow-x-hidden scroll-smooth"
        onMouseEnter={() => setIsHovered(true)}
        onMouseLeave={() => setIsHovered(false)}
      >
        {items.map((item) => renderItem(item))}
      </div>
    </div>
  );
};

export default ScrollContent;


{/* <ScrollContent
  title="My Items"
  items={items}
  renderItem={renderItem}
  scrollSpeed={0.5} // Adjust this value to control scroll speed
/> */}
