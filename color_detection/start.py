# computer perceive images in 2 dimensional array
# 2d- array of pixels

#
import pandas as pd 

# open cv stands for computer vision and  to detect the color at particular pixel
import cv2    

img_path = 'pic1.jpg'
csv_path = 'colors.csv'

# adding header
index= ['color','color_name' , 'hex' ,'R','G','B']

#  data frame = table
data_frame = pd.read_csv(csv_path,names=index,header=None)

#  to print first 5 rows of csv files
# print(data_frame.head(5))


# print(len(data_frame))
# extracting the rows from data frame of csv
# print(data_frame.loc[1,'R'])

img = cv2.imread(img_path)
img= cv2.resize(img,(800,800))
# print(img)

clicked = False 
r= g= b= xpos= ypos =0

def get_color_name(R,G,B):
    minimum = 1000
    for i in range(len(data_frame)):
        # to find the color find the absolute difference
        # of each value with the values of stored in 
        # csv files
        d=abs(R-int(data_frame.loc[i,'R'])) + abs(G-int(data_frame.loc[i,'G'])) +abs(B-int(data_frame.loc[i,'B']))
        #  when absolute sum is minimum we get our color name
        if(d<=minimum):
            minimum = d
            cname = data_frame.loc[i,'color_name']
    return cname 

# print(get_color_name(255,0,0))       

def draw_function(event ,x,y,flag,params):
    #by clicking left btn it will print the position 
    if(event==cv2.EVENT_MOUSEMOVE):
        global clicked ,r , g, b , xpos, ypos
        clicked =True
        xpos = x
        ypos = y
        b ,g,r = img[y,x]
        b = int(b)
        g = int(g)
        r = int(r)


#creating a window
cv2.namedWindow('image')
# binding btn to mouse with draw function()
cv2.setMouseCallback('image', draw_function)

while True:
    cv2.imshow('image',img)
    if(clicked == True) : #   ,height
        cv2.rectangle(img,(20,20),(750,60),(b,g,r) ,-1)
        text = get_color_name(r,g,b) + 'R= ' +str(r) + 'G= ' + str(g) + 'B= ' +str(b)
        cv2.putText(img,text,(50,50),2,0.8,(255,255,255),2,cv2.LINE_AA)
        if(r+g+b >= 600):
            cv2.putText(img,text,(50,50),2,0.8,(0,0,0),2,cv2.LINE_AA)
    if cv2.waitKey(20) & 0xff == 27:
        break

cv2.destroyAllWindows()
