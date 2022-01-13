import React, { useState } from "react"

function ExampleReactComponent() {
  const [clickCount, setClickCount] = useState(0)

  return (
    <div className="example-react-component container mx-auto" onClick={() => setClickCount(prev => prev + 1)}>
      <h1 className="text-2xl underline text-center mb-4">Hello from React!</h1>
      <p className="text-center">You have clicked on this component {clickCount} times.</p>
    </div>
  )
}

export default ExampleReactComponent
