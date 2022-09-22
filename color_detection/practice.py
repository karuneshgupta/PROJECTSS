import pandas as pd
import cv2

img_path = 'pic1.jpg'
csv_path = 'colors.csv'

# adding header
index= ['color','color_name' , 'hex' ,'R','G','B']

#  data frame = table
data_frame = pd.read_csv(csv_path,names=index,header=None)

#  to print first 5 rows of csv files
print(data_frame.head(5))


print(len(data_frame))
# extracting the rows from data frame of csv
print(data_frame.loc[2,'R'])

img = cv2.imread(img_path)
img= cv2.resize(img,(800,800))
img = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
print(img)


