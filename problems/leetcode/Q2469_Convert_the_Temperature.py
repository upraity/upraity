def convertTemperature(self, celsius):
  f = 1.8 * celsius + 32
  k = celsius + 273.15
  return [k,f]
