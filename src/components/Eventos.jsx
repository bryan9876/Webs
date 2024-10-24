import React, { useState } from 'react';

function Eventos() {
  const [text, setText] = useState('');
  const [clicked, setClicked] = useState(false);

  const handleClick = () => {
    setClicked(!clicked);
  };

  const handleChange = (event) => {
    setText(event.target.value);
  };

  return (
    <div>
      <input type="text" value={text} onChange={handleChange} />
      <p>The text you entered is: {text}</p>
      <button onClick={handleClick}>
        {clicked ? 'Clicked!' : 'Click me'}
      </button>
    </div>
  );
}

export default Eventos;
