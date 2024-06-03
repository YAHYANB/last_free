import "./Orders.scss";

const Orders = () => {

  window.scrollTo(0, 0);
  return (
    <div className="orders py-8 px-28">
      <div className="container">
        <div className="title flex justify-between items-center mb-8">
          <h1 className="text-3xl uppercase">Orders</h1>
        </div>

        <div className="flex justify-between items-center bg-slate-200 p-6 rounded-md">
          <div className="px-3 w-[250px] space-y-2">
            <img
              className="image w-full h-40 rounded-sm"
              src="https://images.pexels.com/photos/270408/pexels-photo-270408.jpeg?auto=compress&cs=tinysrgb&w=1600"
              alt=""
            />
            <div className="uppercase">Stunning concept art</div>
            <div className="">59.<sup>99</sup></div>
          </div>

          <div>
            <div className="px-3">Maria Anders</div>
            <img className="message w-12" src="./img/message.png" alt="" />
          </div>
        </div>


      </div>
    </div>
  );
};

export default Orders;
