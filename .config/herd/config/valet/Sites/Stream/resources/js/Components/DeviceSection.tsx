const DeviceSection = () => {
    const devices = [
      {
        name: "Smartphones",
        icon: "/build/iii/phone.svg",
      },
      {
        name: "Tablet",
        icon: "/build/iii/tablet.svg",
      },
      {
        name: "Smart TV",
        icon: "/build/iii/tv.svg", 
      },
      {
        name: "Laptops",
        icon: "/build/iii/laptop.svg",
      },
      {
        name: "Gaming Consoles",
        icon: "/build/iii/game.svg",
      },
      {
        name: "VR Headsets",
        icon: "/build/iii/vr.svg",
      }
    ];
  
    return (
      <section className="mx-8 my-12">
        <div>
          <div className="text-white font-bold text-3xl">
            We Provide you streaming experience across various devices.
          </div>
          
          <div className="text-[#999999] text-sm mt-3 w-3/4 hidden lg:block">
            With StreamVibe, you can enjoy your favorite movies and TV shows anytime, anywhere. Our platform is
            designed to be compatible with a wide range of devices, ensuring that you never miss a moment of
            entertainment.
          </div>
  
          <div className="text-[#999999] text-sm mt-3 lg:hidden text-center">
            With StreamVibe, you can enjoy your favorite movies and TV shows anytime, anywhere.
          </div>
        </div>
  
        <div>
          <div className="grid lg:grid-cols-3 mt-5 gap-5">
            {devices.map((device, index) => (
              <div key={index} className="p-3 rounded-md" id="bgs">
                <div className="flex gap-3 items-center">
                  <img src={device.icon} alt={device.name} />
                  <div className="font-bold text-white text-xl">
                    {device.name}
                  </div>
                </div>
                <div className="text-[#999999] text-sm mt-3 x">
                  StreamVibe is optimized for both Android and iOS smartphones. Download our app from the Google
                  Play Store or the Apple App Store
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    );
  };
  
  export default DeviceSection;
  