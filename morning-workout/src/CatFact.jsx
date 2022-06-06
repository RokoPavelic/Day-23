import React, { useState, useEffect } from "react";

export const CatFact = () => {
  const [cats, setCats] = useState([]);

  const getCats = async () => {
    const response = await fetch("https://catfact.ninja/fact");
    const data = await response.json();
    setCats(data);
  };

  useEffect(() => {
    getCats();
  }, []);

  return (
    <div>
      <p>{cats.fact}</p>
      <button onClick={getCats}> new fact</button>
    </div>
  );
};
